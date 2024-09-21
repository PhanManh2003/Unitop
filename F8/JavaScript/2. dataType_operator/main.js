/**
 * Giới thiệu toán tử trong Js:
 *  1. Toán tử số học: +, -, *, **, /, %, ++, --
 *  2. Toán tử gán: =, +=, -=, *=, **=, /=, %=
 *  3. Toán tử so sánh: ==, ===, !=, !==, >, <, >=, <=
 *  4. Toán tử logic: &&, ||, !
 *  5. Toán tử ba ngôi: condition ? value1 : value2
 *  6. Toán tử chuỗi: +, +=
 */

let a = 2;
let b = '2'; 
console.log(a == b); // true
console.log(a === b); // false
let c = a ** b; // output: 4
console.log(c);
c **= 2; // output: 16
console.log(c);


/**
 * Kiểu dữ liệu nguyên thủy:
 * 1. Number
 * 2. String
 * 3. Boolean
 * 4. Undefined
 * 5. Null
 * 6. Symbol (ES6)
 * 7. BigInt (ES2020)
 * Kiểu dữ liệu phức tạp:
 * 1. Function 
 * 2. Object (Array, Date, Error, OOP, Math, JSON, RegExp, Map, Set, WeakMap, WeakSet, ...)
 */

var x = 'Hel\'lo';
console.log(x); // output: Hel'lo


var id = Symbol('id'); // unique
var id2 = Symbol('id');

console.log(id === id2); // false

var f1 = function () {
    console.log('my name is f1');
}

var y = null;
// Check data type
console.log(typeof y); // typeof luôn trả về kết quả là string


// Truthy vs Falsy
// Falsy: 0, '', "", ``, null, undefined, false, NaN
// Truthy: còn lại
console.log(Boolean(0)); // false
console.log(!!0); // false: vì đây là toán tử not not

console.log(Boolean(document)); // true
console.log(Boolean(document.all)); // false

console.log(Boolean(1)) // true
console.log(Boolean(['BMW'])) // true
console.log(Boolean({ name: 'Miu' })) // true
String(1) // '1'
Number(3)  //  3
Boolean(1) // true



// BigInt
// Cách 1: Sử dụng hậu tố `n`
let bigInt1 = 1234567890123456789012345678901234567890n;
console.log(bigInt1); // 1234567890123456789012345678901234567890n

// Cách 2: Sử dụng hàm BigInt()
let bigInt2 = BigInt("1234567890123456789012345678901234567890");
console.log(bigInt2); // 1234567890123456789012345678901234567890n


// Hiểu thêm về toán tử logic:
let result = 'a' && 'b' && 'c'; 
console.log(result); // output: c
// && nếu thấy 1 thằng là falsy thì nó gán luôn giá trị đó cho biến kết quả và dừng lại
let result2 = 'a' && null && 'c' ; // output: null 
console.log(result2);

// ngược lại thì toán tử || nếu thấy 1 thằng truthy thì nó gán luôn giá trị đó cho biến kết quả và dừng lại



// Quy tắc đặt tên hàm biến: a-z A-Z 0-9 _ $