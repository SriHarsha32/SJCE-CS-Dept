function showSnackBar(alertText) {
    var x = document.getElementById("snackbar")
    x.innerHTML = alertText;
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
}

function logout() {
    window.location.href = "logout.php";
}

$(".form-main").submit(function(event) {
    event.preventDefault();
    var $form = $(this),
        url = $form.attr('action');
    var form_data = new FormData(this);
    $.ajax({
        url: url,
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(data) {
            showSnackBar(data);
            $form[0].reset();
        }
    });
});