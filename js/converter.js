function convert(t, cur) {
    return t * cur;
}
function getValues() {
    t = $('#convert input').val();
    cur = $('#convert select').val();
    t = parseFloat(t);
    cur = parseFloat(cur);

    return [t, cur];
}



$('#convert input').on('input', function () {
    var values = getValues();
    $('h1').text(convert(values[0], values[1]));
});
$('#convert select').on('change', function () {
    var values = getValues();
    $('h1').text(convert(values[0], values[1]));
});

function calc(current) {
    current = $('#current').val();
    console.log(current);

    return result;
}

var current = 0;
var prev = 0;

$('#current').on('input', function () {
    current = $('#current').val();
    current = parseFloat(current);
    console.log(current);
});

$('#prev').on('input', function () {
    prev = $('#prev').val();
    prev = parseFloat(prev);
    console.log(prev);
});

function diff() {
    diff = current - prev;
}

