function palindrome(str) {
 var re = /[^A-Za-z0-9]/g;
 str = str.toLowerCase().replace(re, '');
 var len = str.length;
 for (var i = 0; i < len/2; i++) {
   if (str[i] !== str[len - 1 - i]) {
       return false;
   }
 }
 return true;
}

console.log("racecar"); //returns true
console.log("spaceship"); //returns false
console.log("My age is 0, 0 si ega ym."); //returns true

function palindrome2(str) {
  var re = /[\W_]/g;
  var lowRegStr = str.toLowerCase().replace(re, '');
  var reverseStr = lowRegStr.split('').reverse().join(''); 
  return reverseStr === lowRegStr;
}

console.log("racecar"); //returns true
console.log("spaceship"); //returns false
console.log("My age is 0, 0 si ega ym."); //returns true
