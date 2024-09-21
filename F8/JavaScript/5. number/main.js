var million = 1e6;
console.log(million); // 1000000

/**
 * Đối tượng Number trong Javascript là đối tượng giúp chúng ta định nghĩa số và làm việc với số. 
 * Chúng ta thường sử dụng các phương thức sau của đối tượng Number khi làm việc với số trong Javascript:

Phương thức                     	Vai trò
Number.isFinite()	        Xác định xem giá trị đã cho có phải là số hữu hạn hay không. Trả về boolean
Number.isInteger()	        Xác định xem giá trị đã cho có phải là số nguyên hay không. Trả về boolean
Number.parseFloat()	        Chuyển đổi chuỗi đã cho thành một số dấu phẩy động
Number.parseInt()	        Chuyển đổi chuỗi đã cho thành một số nguyên
Number.prototype.toFixed()	Chuyển đổi và trả về chuỗi đại diện cho số đã cho, có số chữ số chính xác sau dấu thập phân
Number.prototype.toString()	Chuyển đổi và trả về số đã cho dưới dạng chuỗi
 */

console.log(Number.isFinite(2 / 0)); // false
console.log(Number.isFinite(20 / 5)); // true
console.log(Number.isFinite(Math.PI)); // true
console.log(Number.isFinite(2 / 3)); // true

console.log(Number.isInteger(999999999)); // true
console.log(Number.isInteger(0.2));       // false
console.log(Number.isInteger(Math.PI));   // false


console.log(Number.parseFloat('10')); // 10
console.log(Number.parseFloat('10.00')); // 10
console.log(Number.parseFloat('238,21')); // 238
console.log(Number.parseFloat('237.22')); // 237.22
console.log(Number.parseFloat('34 56 78')); // 34
console.log(Number.parseFloat(' 37 ')); // 37
console.log(Number.parseFloat('18 is my age')); // 18

console.log(Number.parseInt('10')); // 10
console.log(Number.parseInt('10.00')); // 10
console.log(Number.parseInt('238,21')); // 238
console.log(Number.parseInt('237.22')); // 237
console.log(Number.parseInt('34 56 78')); // 34
console.log(Number.parseInt(' 37 ')); // 37
console.log(Number.parseInt('18 is my age')); // 18

var numberObject = 1234.56789;
// toFixed để làm tròn số
console.log(numberObject.toFixed()); // '1235'
console.log(numberObject.toFixed(1)); // '1234.6'
console.log(numberObject.toFixed(6)); // '1234.567890'
console.log((3.5).toFixed()); // '4' 

console.log((11).toString());    // '11'
console.log((18).toString());     // '18'
console.log((17.3).toString());   // '17.3'



var result = 20 / 'abc';
console.log(result); // NaN (typeof result -> number)
console.log(isNaN(result)); // true