//1.
$('.illuminate-wrap .submit').click(function () {
    var val = $('.illuminate-wrap input').val();
    val = parseInt(val);

    var num = $('.illuminate-wrap p').eq(val - 1);
    $('.illuminate-wrap p').attr('style', '');

    if (val <= 0 || val > 5) {
        alert('error');
    } else {
        num.css({
            'box-shadow' : 'rgba(144, 203, 86, 0.68) 0px 0px 20px 2px',
            'margin' : '10px 0'
        });
    }
});

//2.
function convert(m, valUnits) {
    return m * valUnits;
}
function getValuesConvertOne() {
    m = $('.convert-one input').val();
    valUnits = $('.convert-one select').val();
    m = parseFloat(m);
    valUnits = parseFloat(valUnits);

    return [m, valUnits];
}

$('.convert-one input').on('input', function () {
    var values = getValuesConvertOne();
    $('.convert-one .res').text(convert(values[0], values[1]));
});
$('.convert-one select').on('change', function () {
    var values = getValuesConvertOne();
    $('.convert-one .res').text(convert(values[0], values[1]));
});

//3.
function getValuesConvertTwo() {
    m = $('.convert-two input').val();
    valUnits = $('.convert-two select').val();
    m = parseFloat(m);
    valUnits = parseFloat(valUnits);

    return [m, valUnits];
}

$('.convert-two input').on('input', function () {
    var values = getValuesConvertTwo();
    $('.convert-two .res').text(convert(values[0], values[1]));
});
$('.convert-two select').on('change', function () {
    var values = getValuesConvertTwo();
    $('.convert-two .res').text(convert(values[0], values[1]));
});

//4.
for(var i=0; i <= 9; i++) {
    $('.keyboard').append('<button>' + i + '</button>');
}
$('.keyboard').append('<button>' + ' ' + '</button>');
$('.keyboard').append('<button>' + '-' + '</button>');

$('.keyboard button').on('click', function () {
    var symbol = $(this).html();
    $('textarea').html($('textarea').html() + symbol);
});