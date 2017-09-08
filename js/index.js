/* ---- variables in JS ----- */
var msgCnt = 3;
var imgCnt = 4;
var imgHds = ["Well constructed building", "Open centre architecture", "Nice Classrooms", "Hi-tech laboratories"];
var imgDets = ["Detials for 1st image goes here. Blah.Blah.Blah.Blah.Blah.Blah.Blah.Blah.",
    "Detials for 2nd image goes here. Blah.Blah.Blah.Blah.Blah.Blah.Blah.Blah.",
    "Detials for 3rd image goes here. Blah.Blah.Blah.Blah.Blah.Blah.Blah.Blah.",
    "Detials for 4th image goes here. Blah.Blah.Blah.Blah.Blah.Blah.Blah.Blah."
];

/* -------------------------- */

/* ------ code in jQuery ------ */
$("#slider_cap_hd").html(imgHds[0]); // document.getElementById("slider_cap_hd").innerHTML = imgHds[0];
$("#slider_cap_dt").html(imgDets[0]); // document.getElementById("slider_cap_dt").innerHTML = imgDets[0];

/* message slider */
$("#msg-btn-left").click(function() {
    var tab = $("#msgP").attr('data');
    var n = tab.substr(tab.length - 1);
    slideMessage(getIndex(n, false, msgCnt));
});

$("#msg-btn-right").click(function() {
    var tab = $("#msgP").attr('data');
    var n = tab.substr(tab.length - 1);
    slideMessage(getIndex(n, true, msgCnt));
});

function slideMessage(index) {
    $(".msg-panel").css("display", "none");
    var dt = "msg" + (index);
    $("#" + dt).css("display", "block");
    $("#msgP").attr('data', dt);
}
/* ---- */

/* image slider */
$("#img-prev").click(function() {
    var tab = $("#slider").attr('data');
    var n = tab.substr(tab.length - 1);
    slideImage(getIndex(n, false, imgCnt));
});

$("#img-next").click(function() {
    var tab = $("#slider").attr('data');
    var n = tab.substr(tab.length - 1);
    slideImage(getIndex(n, true, imgCnt));
});

function slideImage(index) {
    var dt = "img" + (index);
    $("#sldimg").css({ 'opacity': '0%' });
    $("#sldimg").attr('src', 'images/main/' + dt + '.png');
    $("#sldimg").css({ 'opacity': '100%' });
    $("#slider").attr('data', "img" + index);
    $("#slider_cap_hd").html(imgHds[index]);
    $("#slider_cap_dt").html(imgDets[index]);
}
/* -- */

function getIndex(nowindex, next, max) {
    if (next) {
        if (nowindex == max - 1) return 0;
        else return (++nowindex);
    } else {
        if (nowindex == 0) return (max - 1);
        else return (--nowindex);
    }
}

function showSnackBar(alertText) {
    var x = document.getElementById("snackbar")
    x.innerHTML = alertText;
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
}
