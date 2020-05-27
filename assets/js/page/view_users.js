jQuery(document).ready(function () {
  $('#datatable').DataTable({
    "ajax": base_url + "api/crm_users",
    "columns": [
      { "data": "email" },
      { "data": "fname" },
      { "data": "lname" },
      { "data": "phone" },
      { "data": "ip" },
      { "data": "desc" },
      { "data": "category" },
      { "data": "country_code" }
    ]
  });
})