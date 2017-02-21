var arr = [];
document.write("<div class='wrap'>");

for (var i = 1; i <= 5; i++) {
    arr[i] = [];
    document.write("<br />");
    for (var j = 1; j <= 5; j++) {
        arr[i][j-1] = i * j;
        //document.write("<span class='item'>" + arr[i][j-1] + "</span>");  // массив arr
        if (arr[i][j-1] % 2 == 0) {
           //console.log(arr[i][j-1]);  // четные
        }
        if (arr[i][j-1] % 2 != 0) {
            //console.log(arr[i][j-1]);  // нечетные
        }
	if (i == j) {
	    //console.log(arr[i][j-1]); 
	}
    }
}
//console.log(arr);
document.write("</div>");

var r = 0;



/** arr2 **/

var arr2 = [],
    arrInversed = [];

for (var i = 1; i <= 100; i++) {
    arr2[i - 1] = i;
    arrInversed = arr2;
    //console.log(arr2[i]); // элементы массива arr2
}

//console.log(arrInversed);  // перевернутый массив


for (var i = 1; i <= arr2.length; i++) {
   arr2[arr2.length - i] = i;
}
//console.log(arr2);

var arr3 = [];
var a = 1;
for (var i = 1; i <= 5; i++) {
    arr3[i-1] = [];
    document.write("<br />");
    for (var j = 1; j <= 5; j++) {
        arr3[i-1][j-1] = a++;
        //document.write(arr3[i-1][j-1]);  // массив arr
    }
}

var invArr = [];

for (var i = 1; i <= arr3.length; i++) {
    invArr[i-1] = [];
    invArr[i-1] = arr3[arr3.length - i];
    document.write("<br />");
    for (var j = 1; j <= arr3.length; j++) {
        //invArr[i-1][j-1] = arr3[arr3.length - i][arr3.length - j];
        document.write(invArr[i-1][j-1]);  // массив arr
    }
}

console.log(invArr);




