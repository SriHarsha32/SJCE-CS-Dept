// JS functions for modal popup
$('.close').click(function() {
    $('#feedback').css({ "display": "none" });
    $('#subscribe').css({ "display": "none" });
    enableScroll();
    //document.getElementById('id01').style.display='none';
});

$('.tab-custom-item').click(function() {
    var tab_id = $(this).attr('data-tab');
    $(this).siblings().removeClass('tabhead-active');
    $('.tab-content').removeClass('tab-active');

    $(this).addClass('tabhead-active');
    $('#' + tab_id).addClass('tab-active');
});

$("#sub").click(function() {
    $('#subscribe').css({ "display": "block" });
    disableScroll();
});

function feedClick(tab_id) {
    $('#feedback').css({ "display": "block" });
    $('.tab-content').removeClass('tab-active');
    $('#' + tab_id).addClass('tab-active');
    $('.tab-custom-item').removeClass('tabhead-active');
    $('.tab-custom-item[data-tab="' + tab_id + '"]').addClass('tabhead-active');
    disableScroll();
}

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
    if (window.addEventListener) // older FF
        window.addEventListener('DOMMouseScroll', preventDefault, false);
    window.onwheel = preventDefault; // modern standard
    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    window.ontouchmove = preventDefault; // mobile
    document.onkeydown = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
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
            $('#feedback').css({ "display": "none" });
            $('#subscribe').css({ "display": "none" });
            enableScroll();
        }
    });
});