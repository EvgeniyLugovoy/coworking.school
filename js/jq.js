$('.submit').click(function (e) {
    e.preventDefault();
});

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
    $('.list').append('<li>' + listItemValue + '</li>');
}

var result = 0;
$("li").each(function() {
    var val = $(this).text();
    result += +val;
});

$('.list').after('<span class="result">' + 'Sum elements of list: ' + '<i>' + result + '</i>' + '</span>');

//3.
$('#input.submit').on('click', function () {
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
var arr = [[1, 2, 3], 'Hello', ['a', 'b', 'c'], [3, 4, 5], 'Hello'];
//console.log(typeof arr[0]);
for (var i = 0; i < arr.length; i++) {
    $('.main-nav').append('<li></li>');
    if (typeof arr[i] === 'object') {
        $($('.main-nav > li')[i]).append('<ul></ul>');
        for (var j = 0; j < arr[j].length; j++) {
            $($('.main-nav > li')[i]).find('ul').append('<li>' + arr[i][j] + '</li>');
        }
    } else {
        $($('.main-nav > li')[i]).append(arr[i]).addClass('hello');
    }
}

//.5
var result = 1;

$('.sqr input:first-child').on('input', function () {
    var val = $(this).val();
    result = val * val;
    $('.sqr input:last-child').val(result);
});

/* HARDMODE */

//1.
$('input[type=checkbox]').click(function () {
    $('.p-wrap').toggleClass('is-hidden');
});

//2.
function calcRange(min, max) {
    var arr = [];
    for (var i = min; i < max; i++) {
        arr[i - min] = i;
    };

    return arr;
}

function getValues() {
    min = $('#range .min-val').val();
    max = $('#range .max-val').val();
    min = parseInt(min) + 1;
    max = parseInt(max);

    return [min, max];
}

$('.submit').on('click', function () {
    var values = getValues();
    $('.result-arr').text(calcRange(values[0], values[1]));
});

//3.
function fib(n) {
    return n <= 1 ? n : fib(n - 1) + fib(n - 2);
}

function getValue() {
    val = $('.fib input[type=text]').val();
    val = parseInt(val);

    return val;
}

$('.fib .submit').click(function () {
    val = getValue();

    if ($('.fib input').val() == '') {
        alert('You didn\'t enter a value');
    } else {
        alert(fib(val));
    }
});


//4.
$('#controls input').on('input', function () {
    var res = $(this).val();
    res = parseInt(res);

    $('#controls .plus').click(function () {
        res  += 1;
        $('#controls input').val(res);
    });

    $('#controls .minus').click(function () {
        res  -= 1;
        $('#controls input').val(res);
    });
});

