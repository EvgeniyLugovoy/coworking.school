//1.
$($('p')[1]).css({
    'background':'#ee6c4f'
});
$($('p')[2]).css({
   'background':'#90cb56'
});

//2.
$('.wrap:first-child').after('<div class="wrap"><ul class="list"></ul></div>');

for (var i = 0; i < 8; i++) {
    var listItemValue = Math.floor(Math.random() * (30 - 1)) + 1;
    $('ul').append('<li>' + listItemValue + '</li>');
}

var result = 0;
$("li").each(function() {
    var val = $(this).text();
    result += +val;
});

$('.list').after('<span class="result">' + 'Sum elements of list: ' + '<i>' + result + '</i>' + '</span>');

//3.
$('.submit').on('click', function (e) {
    e.preventDefault();
    var a = $('input[type != submit], textarea');
    var arr = [];
    for (i = 0; i < a.length; i++) {
        arr[i] = $(a[i]).val();
        if (arr[i] !== '') {
            var tellMe = arr;
        } else {
            $(this).after(tellMe = '<span class="error">all fields must be filled</span>');
            break;
        }
    }
    $(this).after('<span class="output">' + arr + '</span>');
});

$('input').on('focus', function () {
    $('.error, .output').fadeOut(function () {
        $(this).remove();
    });
});

//4.


