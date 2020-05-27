jQuery(document).ready(function () {
    App.init(), App.initCounter(), App.initParallaxBg(), LoginForm.initLoginForm(), ContactForm.initContactForm(), OwlCarousel.initOwlCarousel()

    $("#step_1").click(function () {
        let a = $("#firstname_1").val();
        let e = $("#lastname_1").val();
        let i = $("#phone_1").val();
        let l = $("#email_1").val();
        let n = ip;
        let s = country;
        let o = state;
        let c = city;
        let d = zipCode;

        $.ajax({
            url: base_url + "api/crm",
            data: {
                mode: "insert",
                fname: a,
                lname: e,
                phone: i,
                email: l,
                ip: n,
                country: s,
                city: c,
                zipCode: d,
                state: o
            },
            dataType: "json",
            async: !1,
            success: function (s) {
                if ("success" === s.status) {
                    $("#crmId_1").val(s.id);

                    t(a, e, l, i, n, s.id);
                } else {
                    $("#f1_last").css("margin-bottom", "0");
                    $("#f1_err_show").text(s.str);
                }
            }
        })
    });

    $("#step_1_other").click(function () {
        let a = $("#firstname_1_other").val();
        let e = $("#lastname_1_other").val();
        let i = $("#phone_1_other").val();
        let l = $("#email_1_other").val();
        let n = ip;
        let s = country;
        let o = state;
        let c = city;
        let d = zipCode;

        $.ajax({
            url: base_url + "api/crm",
            data: {
                mode: "insert",
                fname: a,
                lname: e,
                phone: i,
                email: l,
                ip: n,
                country: s,
                city: c,
                zipCode: d,
                state: o
            },
            dataType: "json",
            async: !1,
            success: function (s) {
                "success" === s.status ? ($("#crmId_1_other").val(s.id), t(a, e, l, i, n, s.id)) : $("#f1_other_err_show").text(s.str)
            }
        })
    });

    $("#step_mobile").click(function () {
        let a = $("#firstname_mobile").val();
        let e = $("#lastname_mobile").val();
        let i = $("#phone_mobile").val();
        let l = $("#email_mobile").val();
        let n = ip;
        let s = country;
        let o = state;
        let c = city;
        let d = zipCode;

        $.ajax({
            url: base_url + "api/crm",
            data: {
                mode: "insert",
                fname: a,
                lname: e,
                phone: i,
                email: l,
                ip: n,
                country: s,
                city: c,
                zipCode: d,
                state: o
            },
            dataType: "json",
            async: !1,
            success: function (s) {
                "success" === s.status ? ($("#crmId_mobile").val(s.id), t(a, e, l, i, n, s.id)) : $("#f_mobile_err_show").text(s.str)
            }
        })
    })
})

var t = function (t, a, e, i, l, n) {
    // ksh check start // formAweber 
    console.log("kshtest: t_function", t, a, e, i, l, n);
    window.location.href = redirect_url_landing + "step=1&fname=" + t + "&lname=" + a + "&email=" + e + "&phone=" + i + "&crmId=" + n;
    return;
    // ksh check end// formAweber user is not set for now. it is disabled for now.
    if ("" === i) {
        $("#awf_field-82752363").val(t + " " + a), $("#awf_field-82752364").val(e), $("#awf_field-82752367").val(i), $("#awf_field-82752368").val("Home"), $("#awf_field-82752369").val(l);
        var s = redirect_url_landing + "step=1&fname=" + t + "&lname=" + a + "&email=" + e + "&phone=" + i + "&crmId=" + n;
        $("#redirect_65b8c385fd7acfa885f54e3f5415bfab").val(s), $("#formAweber_l1_emailonly").submit()
    } else {
        $("#awf_field-82752449").val(t + " " + a), $("#awf_field-82752450").val(e), $("#awf_field-82752453").val(i), $("#awf_field-82752454").val("Home"), $("#awf_field-82752455").val(l);
        var s = redirect_url_landing + "step=1&fname=" + t + "&lname=" + a + "&email=" + e + "&phone=" + i + "&crmId=" + n;
        $("#redirect_8666951c41f4a81ab710674683da2222").val(s), $("#formAweber_l1_withphone").submit()
    }
};

// ksh check start // check the homepage is https and check it is the trusted url
var tlJsHost = "https:" == window.location.protocol ? "https://secure.comodo.com/" : "http://www.trustlogo.com/";
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"))
// ksh check start // check the homepage is https and check it is the trusted url

function checkMandatory_step_1() {
    var e = document.getElementById("firstname_1").value;
    "" == e && (document.getElementById("firstname_1").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_1").style.border = "0 solid");
}

function checkMandatory_step_1_email() {
    var t = document.getElementById("email_1").value;
    return "" == t && (document.getElementById("email_1").style.border = "2px solid red"), "" != t && (document.getElementById("email_1").style.border = "0 solid"), !0
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
    "" == e && (document.getElementById("firstname_mobile").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_mobile").style.border = "2px solid");
    var t = document.getElementById("email_mobile").value;
    return "" == t && (document.getElementById("email_mobile").style.border = "2px solid red"), "" != t && (document.getElementById("email_mobile").style.border = "2px solid"), !0
}

function checkMandatory_step_mobile_email() {
    var e = document.getElementById("firstname_mobile").value;
    "" == e && (document.getElementById("firstname_mobile").style.border = "2px solid red"), "" != e && (document.getElementById("firstname_mobile").style.border = "2px solid");
    var t = document.getElementById("email_mobile").value;
    return "" == t && (document.getElementById("email_mobile").style.border = "2px solid red"), "" != t && (document.getElementById("email_mobile").style.border = "2px solid"), !0
}


