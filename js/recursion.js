var arr = [];
var max = 50;
for (var i = 1; i <= max; i++) {
    arr[i - 1] = i;
}

function shuffle() {
    return Math.random() - 0.5;
}

arr.sort(shuffle);
var sliceArr = arr.slice(0, 10);
console.log(sliceArr, 'sliceArr');

/*1.
  a*/
/*******************
* variant with cicle
*******************/
function sumElem(total) {
    total = 0;
    if (0 < sliceArr.length) {
        for (var i = 0; i < sliceArr.length; i++) {
            total += sliceArr[i];
        }
        console.log(total, '- sum of all numbers in the array "sliceArr" (array)');
    } else {
        console.log('array is empty');
    }
}

sumElem();

/***********************
* variant with recursion
***********************/
var sum = 0;
var count = 0;

sum += countElem(sliceArr, count);
function countElem(sliceArr, ind) {
    return ind < sliceArr.length ?  sliceArr[ind] + countElem(sliceArr, ind + 1) :  0;
}

console.log(sum, '- sum of all numbers in the array "sliceArr" (recursion)');

//b
/***************
 * average value
 **************/
var value;
function averageValue() {
    var total = 0;
    for (var i = 1; i <= sliceArr.length; i++) {
        total += sliceArr[i - 1];
    }
    total /= sliceArr.length;
    value = total.toFixed();
    console.log(value,'- average value all numbers in the array "sliceArr"');
}
averageValue();

//c
/***************************
 * main diagonal of an array
 **************************/
function mainDiagonal(arr) {
    arr = [1,2,3,4,5];
    for (var i = 1; i <= 5; i++) {
        arr[i] = [];
        for (var j = 1; j <= 5; j++) {
            arr[i][j - 1] = i * j;
            if (i == j) {
                console.log(arr[i][j - 1], ' -  element of main diagonal');
            }
        }
    }
}

mainDiagonal();

//2.
/*****************
 *
 ****************/
function someName(x, result) {
    x = 3;
    if (x > 0) {
        result = Math.pow(x, 2);
        console.log(result, 'x > 0');
    } else if (x < 0) {
        result = 5 * x + 5;
        console.log(result, 'x < 0');
    } else {
        console.log(x, 'x = 0');
    }
}

someName();

//3.
/*******************
 * Fibonacci numbers
 ******************/

var arr = [];
function fib(n) {
    return n <= 1 ? n : fib(n - 1) + fib(n - 2);
    console.log(n);
}
for (var i = 1; i <= 10; i++) {
    arr[i - 1] = fib(i);
}
arr = arr.join(',');

console.log(arr);

//4. 5.
/*******
 * while
 ******/
var arr2 = [];
var i = 1;
var sum = 0;
function cycle() {
    while (i <= 100) {
        arr2[i - 1] = i;
        sum += i;
        i++;
    }
}
cycle();
console.log(arr2, 'all values of the array "arr2"');
console.log(sum, 'sum of the array elements');

//6.
/***************************************************************************************
 * save the first and last elements from array into variables and then delete from array
 **************************************************************************************/

function rmArrElem(a, b) {
    a = arr2.shift();
    b = arr2.pop();
    console.log(arr2);
}

rmArrElem();

//7.
/************************************
 * find items with index 6, 15 and 27
 ***********************************/

function findItems(value) {
    value = arr2.indexOf(6);
    console.log(value);
    value = arr2.indexOf(15);
    console.log(value);
    value = arr2.indexOf(27);
    console.log(value);
}

findItems();