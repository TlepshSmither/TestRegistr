$(document).ready(function () {
    $('#btn').click(
        function () {
            sendAjaxForm('result_form', 'ajax_form', 'index.php');
            // return false;
        }
    );
});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#" + ajax_form).serialize(),
        success: function (response) {
            result = $.parseJSON(response);
        }
    });
}
