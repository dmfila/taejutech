var isExpire = 0;
$(function () {
    App.init(), OwlCarousel.initOwlCarousel(), ContactForm.initContactForm()

    $("#step_2").click(function () {
        var t = "",
            e = "",
            i = "",
            c = 0,
            a = "",
            n = "";
        a = $("#email").val(), n = $("#phone").val(), t = $("#Description").val(), e = $("input[name='crmId']").val(), i += $("#Books:checked").length ? $("#Books").attr("id") + " " : "", i += $("#Business:checked").length ? $("#Business").attr("id") + " " : "", i += $("#Education:checked").length ? $("#Education").attr("id") + " " : "", i += $("#Entertainment:checked").length ? $("#Entertainment").attr("id") + " " : "", i += $("#Finance:checked").length ? $("#Finance").attr("id") + " " : "", i += $("#Games:checked").length ? $("#Games").attr("id") + " " : "", i += $("#HF:checked").length ? "Health/Fitness " : "", i += $("#Lifestyle:checked").length ? $("#Lifestyle").attr("id") + " " : "", i += $("#Medical:checked").length ? $("#Medical").attr("id") + " " : "", i += $("#Music:checked").length ? $("#Music").attr("id") + " " : "", i += $("#News:checked").length ? $("#News").attr("id") + " " : "", i += $("#Photography:checked").length ? $("#Photography").attr("id") + " " : "", i += $("#Productivity:checked").length ? $("#Productivity").attr("id") + " " : "", i += $("#Social:checked").length ? $("#Social").attr("id") + " " : "", i += $("#Networking:checked").length ? $("#Networking").attr("id") + " " : "", i += $("#Sports:checked").length ? $("#Sports").attr("id") + " " : "", i += $("#Transprtation:checked").length ? $("#Transprtation").attr("id") + " " : "", i += $("#Travel:checked").length ? $("#Travel").attr("id") + " " : "", i += $("#Weather:checked").length ? $("#Weather").attr("id") + " " : "", i += $("#Other:checked").length ? $("#Other").attr("id") + " " : "", c = "" === n ? 1 : 2, $.ajax({
            url: base_url + "api/crm",
            data: {
                mode: "update",
                crmId: e,
                desc: t,
                category: i,
                email: a,
                kind: c,
                expire: isExpire
            },
            dataType: "json",
            async: !1,
            success: function (t) {
                "success" === t.status ? window.location = "<?= $redirect_url; ?>" : $("#f2_err_show").text(t.str)
            }
        })
    }), setTimeout(function () {
        isExpire = 1
    }, 36e5)
});

// ! function(e, t, a, n, c, o, s) {
//     e.GoogleAnalyticsObject = c, e[c] = e[c] || function() {
//         (e[c].q = e[c].q || []).push(arguments)
//     }, e[c].l = 1 * new Date, o = t.createElement(a), s = t.getElementsByTagName(a)[0], o.async = 1, o.src = n, s.parentNode.insertBefore(o, s)
// }(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga"), ga("create", "UA-76680743-1", "auto"), ga("send", "pageview")