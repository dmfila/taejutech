<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/* Author: scott
 * Description: My Model class
 */
class My_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function resetSession()
    {
        $user_id = $this->session->userdata('id');
        if (DB_SUCCESS == $this->getById("tb_user", $user_id, $user_data)) {
            $user_data["validated"] = true;
            $this->session->set_userdata($user_data);
        }
    }

    public function getById($table_name, $id, &$row_data, $field_name = null, $order = null)
    {
        return $this->getSingleData($table_name, "id=" . $id, $row_data, $field_name, $order);
    }

    public function getByName($table_name, $name, &$row_data, $field_name = null, $order = null)
    {
        return $this->getSingleData($table_name, "name='" . $name . "'", $row_data, $field_name, $order);
    }

    public function getSingleData($table_name, $where, &$row_data, $field_name = null, $order = null)
    {
        $row_data = array();
        $this->db->where($where);
        if ($order != null) {
            $this->db->order_by($order);
        }

        try {
            $query = $this->db->get($table_name);
        } catch (Throwable $th) {
            return DB_SQL_ERR;
        }

        if ($query->num_rows() > 0) {
            $rows = $query->result_array();
            if ($field_name != null) {
                for ($i = 0; $i < count($field_name); $i++) {
                    $row_data[$field_name[$i]] = $rows[0][$field_name[$i]];
                }
            } else {
                $row_data = $rows[0];
            }
            return DB_SUCCESS;
        }
        return DB_NO_RESULT;
    }

    public function getMultiData($table_name, $where, &$rows_data, $field_name = null, $order = null)
    {
        $rows_data = array();

        $this->db->where($where);
        if ($order != null) {
            $this->db->order_by($order);
        }

        try {
            $query = $this->db->get($table_name);
        } catch (Throwable $th) {
            return DB_SQL_ERR;
        }

        if ($query->num_rows() > 0) {
            $rows = $query->result_array();
            if ($field_name != null) {
                for ($k = 0; $k < count($rows); $k++) {
                    $row_data = array();
                    for ($i = 0; $i < count($field_name); $i++) {
                        $row_data[$field_name[$i]] = $rows[$k][$field_name[$i]];
                    }
                    $rows_data[] = $row_data;
                }
            } else {
                $rows_data = $rows;
            }
            return DB_SUCCESS;
        }
        return DB_NO_RESULT;
    }
    //
    public function getLauncherInfo()
    {
        $this->getByName("tb_apk_info", "launcher", $apk_info);
        return $apk_info;
    }
    public function getSysInfo()
    {
        $this->getSingleData("tb_sys_info", "1=1", $sys_info);
        return $sys_info;
    }

    public function saveSysInfo()
    {
        $data = array();
        $data = $this->security->xss_clean($this->input->post());
        if (isset($_FILES['logo']) && !empty($_FILES['logo'])) {
            $logo_name = "logo.png";
            move_uploaded_file($_FILES["logo"]["tmp_name"], 'data/logo/' . $logo_name);
            $data["logo"] = $logo_name;
        }
        $this->db->update("tb_sys_info", $data);
    }

    public function saveLauncherInfo()
    {
        $data = array();
        $data = $this->security->xss_clean($this->input->post());
        if (isset($_FILES['file_name']) && !empty($_FILES['file_name'])) {
            $file_name = "launcher._apk";
            move_uploaded_file($_FILES["file_name"]["tmp_name"], 'data/file/' . $file_name);
            $data["file_name"] = $file_name;
        }
        $this->db->where("name", "launcher");
        $this->db->update("tb_apk_info", $data);
    }
    public function saveMessage()
    {
        $no_box_msg = $this->security->xss_clean($this->input->post("no_box_msg"));
        $block_box_msg = $this->security->xss_clean($this->input->post("block_box_msg"));
        //
        $this->db->where("type", RSP_FAIL);
        $data = array("msg" => $no_box_msg);
        $this->db->update("tb_msg", $data);
        //
        $this->db->where("type", RSP_USER_BLOCK);
        $data = array("msg" => $block_box_msg);
        $this->db->update("tb_msg", $data);
    }
    public function getMessageInfo()
    {
        $this->getMultiData("tb_msg", "1=1", $msg_data);
        $msgs = array();
        for ($i = 0; $i < count($msg_data); $i++) {
            $msgs[$msg_data[$i]["type"]] = $msg_data[$i]["msg"];
        }
        return $msgs;
    }

    public function setDefaultDesktopById($desktop_id)
    {
        $data = array(
            "default_desktop_id" => $desktop_id,
        );
        $this->db->update("tb_sys_info", $data);
    }
    public function setDefaultGroupById($group_id)
    {
        $data = array(
            "default_group_id" => $group_id,
        );
        $this->db->update("tb_sys_info", $data);
    }
    //
    public function createImage($path, $ref_name, $data, $file_name = null)
    {

        // $data = preg_replace('/data:image\/(png|jpg|jpeg|gif|bmp);base64,/', '', $data);
        $data1 = substr($data, strpos($data, ",") + 1);
        $data2 = str_replace(' ', '+', $data1);
        $data3 = base64_decode($data2);

        if ($file_name == null) {
            $file_name = str_replace(" ", "_", $ref_name) . "(" . $_SERVER['REQUEST_TIME'] . ")" . "." . "png";
        }
        $file_path = $path . "/" . $file_name;
        $success = file_put_contents($file_path, $data3);
        return $success ? $file_name : '';
    }
    public function removeFile($path)
    {
        // if (file_exists($path)) {
        // unlink($path);
        // }
    }
    // relative img
    public function getGroupThumb($file_name)
    {
        if ($file_name == null || $file_name == "") {
            return base_url() . "data/group/default_thumb.png";
        } else {
            return base_url() . "data/group/thumb/" . $file_name;
        }
    }
    public function getGroupPicture($file_name)
    {
        if ($file_name == null || $file_name == "") {
            return base_url() . "data/group/default_picture.png";
        } else {
            return base_url() . "data/group/picture/" . $file_name;
        }
    }
    public function getDesktopThumb($file_name)
    {
        if ($file_name == null || $file_name == "") {
            return base_url() . "data/desktop/default_thumb.png";
        } else {
            return base_url() . "data/desktop/thumb/" . $file_name;
        }
    }
    public function getDesktopPicture($file_name)
    {
        if ($file_name == null || $file_name == "") {
            return base_url() . "data/desktop/default_picture.png";
        } else {
            return base_url() . "data/desktop/picture/" . $file_name;
        }
    }
}
