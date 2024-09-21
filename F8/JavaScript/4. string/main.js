/**
 * CHUỖI TRONG JavaScript
 * 1. Tạo chuỗi
 * 2. Một số case sử dụng backslash (\)
 * 3. Xem độ dài chuỗi
 * 4. Chú ý độ dài 
 * 5. Template string
 * 
 */


// 1. Các cách tạo chuỗi
var myString = 'Hello!';
var myString2 = "Hello!";
var myString3 = `Hello!`;
var myString4 = new String('Hello!');
console.log(typeof myString4); // Kết quả: object
console.log(typeof myString3); // Kết quả: string

// 2. Một số case sử dụng backslash (\)
var myString = 'I\'m a \\ "developer"';
console.log(myString); // Kết quả: I'm a \ "developer"

// 3. Xem độ dài chuỗi
var myString = 'ábc'
    + 'xyz';
console.log(myString.length); 
// 4. Chú ý độ dài (UTF-16)
var myString = '😀';
console.log(myString); // Kết quả: 😀
console.log(myString.length); // Kết quả: 2



/**
 * LÀM VIỆC VỚI CHUỖI 
 * 1. length
 * 2. indexOf, search
 * 3. slice (cắt chuỗi)
 * 4. replace
 * 5. toUpperCase, toLowerCase
 * 6. trim
 * 7. split
 * 8. get a character by index
 *
 */

// 2. indexOf, search
var myString = 'Hoc Js Js';
console.log(myString.indexOf('Js', 5)); // Kết quả: 7
console.log(myString.lastIndexOf('Js')); // Kết quả: 7
console.log(myString.search('Js')); // Kết quả: 4   

// 3. cut string (giống substring trong Java)
var myString = 'Hoc Js Js';
console.log(myString.slice(4, 6)); // Kết quả: Js, kí tự đầu tiên là 0, và tăng dần
console.log(myString.slice(-2)); // Kết quả: Js, kí tự cuối cùng là -1, và giảm dần

// 4. replace
var myString = 'Hoc Js Js';
console.log(myString.replace('Js', 'Javascript')); // Kết quả: Hoc Javascript Js
console.log(myString.replace(/Js/g, 'Javascript'));  // Kết quả: Hoc Javascript Javascript

// 5. toUpperCase, toLowerCase
var myString = 'Hoc Js Js';
console.log(myString.toUpperCase()); // Kết quả: HOC JS JS
console.log(myString.toLowerCase()); // Kết quả: hoc js js

// 6. trim
var myString = '   Hoc Js Js   ';
console.log(myString.trim()); // Kết quả: Hoc Js Js

// 7. split
var myString = 'php,java,ruby';
console.log(myString.split(',')); // Kết quả: ["php", "java", "ruby"]

// 8. get a character by index
var myString = 'Hoc Js Js';
console.log(myString.charAt(11)); // Kết quả: chuỗi rỗng
console.log(myString[11]); // Kết quả: undefined
