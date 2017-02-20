var arr = [];
document.write("<div class='wrap'>");

for (var i = 0; i <= 5; i++) {
    arr[i] = [];
    document.write("<br />");
    for (var j = 0; j <= 5; j++) {
        arr[i][j] = i * j;
        document.write("<span class='item'>" + arr[i][j] + "</span>");  // массив arr
        if (arr[i][j] % 2 == 0) {
            //console.log(arr[i][j]);  // четные
        }
        if (arr[i][j] % 2 != 0) {
            //console.log(arr[i][j]);  // нечетные
        }
    }
}
//console.log(arr);
document.write("</div>");

var r = 0;

for (var i = 1; i < arr.length; i++) {
    console.log(arr[i][i]); // главная диагональ
}

/** arr2 **/

var arr2 = [],
    arrInversed = [];

for (var i = 1; i <= 100; i++) {
    arr2[i] = i;
    arrInversed = arr2;
    //console.log(arr2[i]); // элементы массива arr2
}

arrInversed.reverse();
//console.log(arrInversed);  // перевернутый массив

