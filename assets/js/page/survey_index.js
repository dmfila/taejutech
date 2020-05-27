$(function () {
    App.init();
    OwlCarousel.initOwlCarousel();
    ContactForm.initContactForm();

    var isExpire = 0;


    $("#step_2").click(function () {
        var desc = "";
        var crmId = "";
        var category = "";
        var kind = 0;
        var email = "";
        var phone = "";
        var country_code = "";
        var fname = "";

        fname = $("#firstname").val();
        email = $("#email").val();
        phone = $("#phone").val();
        desc = $("#Description").val();
        crmId = $("input[name='crmId']").val();
        category += $("#Books:checked").length ? $("#Books").attr("id") + " " : "";
        category += $("#Business:checked").length ? $("#Business").attr("id") + " " : "";
        category += $("#Education:checked").length ? $("#Education").attr("id") + " " : "";
        category += $("#Entertainment:checked").length ? $("#Entertainment").attr("id") + " " : "";
        category += $("#Finance:checked").length ? $("#Finance").attr("id") + " " : "";
        category += $("#Games:checked").length ? $("#Games").attr("id") + " " : "";
        category += $("#HF:checked").length ? "Health/Fitness " : "";
        category += $("#Lifestyle:checked").length ? $("#Lifestyle").attr("id") + " " : "";
        category += $("#Medical:checked").length ? $("#Medical").attr("id") + " " : "";
        category += $("#Music:checked").length ? $("#Music").attr("id") + " " : "";
        category += $("#News:checked").length ? $("#News").attr("id") + " " : "";
        category += $("#Photography:checked").length ? $("#Photography").attr("id") + " " : "";
        category += $("#Productivity:checked").length ? $("#Productivity").attr("id") + " " : "";
        category += $("#Social:checked").length ? $("#Social").attr("id") + " " : "";
        category += $("#Networking:checked").length ? $("#Networking").attr("id") + " " : "";
        category += $("#Sports:checked").length ? $("#Sports").attr("id") + " " : "";
        category += $("#Transprtation:checked").length ? $("#Transprtation").attr("id") + " " : "";
        category += $("#Travel:checked").length ? $("#Travel").attr("id") + " " : "";
        category += $("#Weather:checked").length ? $("#Weather").attr("id") + " " : "";
        category += $("#Other:checked").length ? $("#Other").attr("id") + " " : "";

        if (phone === "")
            kind = 1;
        else
            kind = 2;
        $.ajax({
            url: base_url + "api/crm",
            data: {
                mode: 'update',
                crmId: crmId,
                desc: desc,
                category: category,
                email: email,
                kind: kind,
                expire: isExpire,
                phone: phone,
                country_code: country_code,
                fname: fname
            },
            dataType: "json",
            async: false,
            success: function (data) {
                if (data['status'] === 'success') {
                    window.location = redirect_url;
                } else {
                    $("#f2_err_show").text(data['str']);
                }
            }
        });
    });
    setTimeout(function () {
        isExpire = 1;
    }, 3600 * 1000);
});



// (function(i, s, o, g, r, a, m) {
//     i['GoogleAnalyticsObject'] = r;
//     i[r] = i[r] || function() {
//         (i[r].q = i[r].q || []).push(arguments)
//     }, i[r].l = 1 * new Date();
//     a = s.createElement(o),
//         m = s.getElementsByTagName(o)[0];
//     a.async = 1;
//     a.src = g;
//     m.parentNode.insertBefore(a, m)
// })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

// ga('create', 'UA-76680743-1', 'auto');
// ga('send', 'pageview');


		// (function(i, s, o, g, r, a, m) {
		// 	i['GoogleAnalyticsObject'] = r;
		// 	i[r] = i[r] || function() {
		// 		(i[r].q = i[r].q || []).push(arguments)
		// 	}, i[r].l = 1 * new Date();
		// 	a = s.createElement(o),
		// 		m = s.getElementsByTagName(o)[0];
		// 	a.async = 1;
		// 	a.src = g;
		// 	m.parentNode.insertBefore(a, m)
		// })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		// ga('create', 'UA-76680743-1', 'auto');
		// ga('send', 'pageview');