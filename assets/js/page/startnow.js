
$(document).ready(function () {
    $("#step_1").click(function () {
        var e = document.getElementById("firstname_1").value;
        if ("" == e) return void (document.getElementById("firstname_1").style.border = "2px solid red");
        "" != e && (document.getElementById("firstname_1").style.border = "2px solid");
        var t = document.getElementById("email_1").value;
        if ("" == t) return void (document.getElementById("email_1").style.border = "2px solid red");
        if ("" != t && (document.getElementById("email_1").style.border = "2px solid"), !document.getElementById("f1_18years").checked) return void alert("Please Confirm Your Age Before Proceeding!");
        var o = "",
            l = "",
            n = "",
            r = "",
            a = "",
            i = "",
            d = "",
            m = "",
            s = "";
        o = $("#firstname_1").val(), l = $("#lastname_1").val(), n = $("#phone_1").val(), r = $("#email_1").val(), a = ip, $.ajax({
            url: base_url + "api/crm_api_twilio",
            data: {
                mode: "insert",
                fname: o,
                lname: l,
                phone: n,
                email: r,
                ip: a,
                country: i,
                city: m,
                zipCode: s,
                state: d,
                country_code: "main_top-L"
            },
            dataType: "json",
            async: !1,
            success: function (e) {
                "success" === e.status ? ($("#crmId_1").val(e.id), window.location = redirect_url_landing + "step=1&fname=" + o + "&lname=" + l + "&email=" + r + "&phone=" + n + "&crmId=" + e.id) : ($("#f1_last").css("margin-bottom", "0"), $("#f1_err_show").text(e.str))
            }
        })
    }), $("#step_1_other").click(function () {
        var e = document.getElementById("firstname_1_other").value;
        if ("" == e) return void (document.getElementById("firstname_1_other").style.border = "2px solid red");
        "" != e && (document.getElementById("firstname_1_other").style.border = "2px solid");
        var t = document.getElementById("email_1_other").value;
        if ("" == t) return void (document.getElementById("email_1_other").style.border = "2px solid red");
        if ("" != t && (document.getElementById("email_1_other").style.border = "2px solid"), !document.getElementById("f1_18yearsother").checked) return void alert("Please Confirm Your Age Before Proceeding!");
        var o = "",
            l = "",
            n = "",
            r = "",
            a = "",
            i = "",
            d = "",
            m = "",
            s = "";
        o = $("#firstname_1_other").val(), l = $("#lastname_1_other").val(), n = $("#phone_1_other").val(), r = $("#email_1_other").val(), a = ip, $.ajax({
            url: base_url + "api/crm_api_twilio",
            data: {
                mode: "insert",
                fname: o,
                lname: l,
                phone: n,
                email: r,
                ip: a,
                country: i,
                city: m,
                zipCode: s,
                state: d,
                country_code: "main_desk_bottom-L"
            },
            dataType: "json",
            async: !1,
            success: function (e) {
                "success" === e.status ? ($("#crmId_1_other").val(e.id), window.location = redirect_url_landing + "step=1&fname=" + o + "&lname=" + l + "&email=" + r + "&phone=" + n + "&crmId=" + e.id) : $("#f1_other_err_show").text(e.str)
            }
        })
    }), $("#step_mobile").click(function () {
        var e = document.getElementById("firstname_mobile").value;
        if ("" == e) return void (document.getElementById("firstname_mobile").style.border = "2px solid red");
        "" != e && (document.getElementById("firstname_mobile").style.border = "2px solid");
        var t = document.getElementById("email_mobile").value;
        if ("" == t) return void (document.getElementById("email_mobile").style.border = "2px solid red");
        if ("" != t && (document.getElementById("email_mobile").style.border = "2px solid"), !document.getElementById("f1_18yearsmobile").checked) return void alert("Please Confirm Your Age Before Proceeding!");
        var o = "",
            l = "",
            n = "",
            r = "",
            a = "",
            i = "",
            d = "",
            m = "",
            s = "";
        o = $("#firstname_mobile").val(), l = $("#lastname_mobile").val(), n = $("#phone_mobile").val(), r = $("#email_mobile").val(), a = ip, $.ajax({
            url: base_url + "api/crm_api_twilio",
            data: {
                mode: "insert",
                fname: o,
                lname: l,
                phone: n,
                email: r,
                ip: a,
                country: i,
                city: m,
                zipCode: s,
                state: d,
                country_code: "main_mob_bottom-L"
            },
            dataType: "json",
            async: !1,
            success: function (e) {
                "success" === e.status ? ($("#crmId_mobile").val(e.id), window.location = redirect_url_landing + "step=1&fname=" + o + "&lname=" + l + "&email=" + r + "&phone=" + n + "&crmId=" + e.id) : $("#f_mobile_err_show").text(e.str)
            }
        })
    })
});

function checkMandatory_step_1() {
    var e = document.getElementById("firstname_1").value;
    "" == e && (document.getElementById("firstname_1").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_1").style.border = "0 solid", document.getElementById("firstname_1").style.borderBottom = "1px solid");
}

function checkMandatory_step_1_email() {
    var t = document.getElementById("email_1").value;
    return "" == t && (document.getElementById("email_1").style.border = "2px solid red"), "" != t && (document.getElementById("email_1").style.border = "0 solid", document.getElementById("email_1").style.borderBottom = "1px solid"), !0
}

function checkMandatory_step_1_other() {
    var e = document.getElementById("firstname_1_other").value;
    "" == e && (document.getElementById("firstname_1_other").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_1_other").style.border = "0 solid");
}

function checkMandatory_step_1_other_email() {
    var t = document.getElementById("email_1_other").value;
    return "" == t && (document.getElementById("email_1_other").style.border = "2px solid red"), "" != t && (document.getElementById("email_1_other").style.border = "0 solid"), !0
}

function checkMandatory_step_mobile() {
    var e = document.getElementById("firstname_mobile").value;
    "" == e && (document.getElementById("firstname_mobile").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_mobile").style.border = "0 solid");
}

function checkMandatory_step_mobile_email() {
    var t = document.getElementById("email_mobile").value;
    return "" == t && (document.getElementById("email_mobile").style.border = "2px solid red"), "" != t && (document.getElementById("email_mobile").style.border = "0 solid"), !0
}