jQuery(document).ready(function() {
    if (document.cookie.indexOf("votedcookies") >= 0) {
        jQuery.post("/wp-admin/admin-ajax.php?action=get_ratings", 'post_id=' + post_id, function(data) {
            $.each(JSON.parse(data), function(i, obj) {
                $('#rate' + obj.type).html(obj.votes);
            });
            $('#votes').show();
        });
    }
    jQuery('img#rate').click(function() {
        rate_id = $(this).data('id');
        post_id = $(this).data('post_id');
        jQuery.post("/wp-admin/admin-ajax.php?action=karam", 'rate_id=' + rate_id + '&post_id=' + post_id, function(data) {
            $.each(JSON.parse(data), function(i, obj) {
                $('#rate' + obj.type).html(obj.votes);
            });
            $('#votes').show();
            var cookie_date = new Date();
            document.cookie = "votedcookies" + "=1;path=/; expires:" + cookie_date.toGMTString();
        });
    });
});