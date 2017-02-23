console.log($('#title'));
console.log($('.title'));
console.log($('p'));
console.log($('ul').find('li'));
var a = $('#title');
a.text('asadsadsad');
a.attr('id');

$($('h2')[0]).attr('class');
console.log($($('h2')[0]).attr('class'));

$('h3').css({
    'color':'red',
    'background':'blue'
});
$('span').text('Hello');
$($('span')[0]).text('class');
$($('span')[1]).text('cl123213ass');
$($('span')[2]).text('cl12321saxsaxsax3ass');


var a = $('ul').children();
for (var i = 0; i < a.length; i++) {
    $(a[i]).html(i+1);
    if ((i+1) % 2 == 0) {
        $(a[i]).css({
            'color':'red',
            'background':'blue'
        });
    } else {
        $(a[i]).css({
            'color':'#fff',
            'background':'blue'
        });
    }
}


    i = 1;
    while (i < 100) {
        i++;
        var el = '<li>' + (i + 1) + '</li>';
        $('ul').append(el);
    }


$('input').on('input', function () {
    console.log($(this).val());
});