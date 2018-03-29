function countWords(str){
    var count = 0;
    var str2 = str.split(" ");
    return str2.length;
}

console.log(countWords("Hello from the other side"));  //returns 5
console.log(countWords("That's one small step for man one giant leap for mankind"));  //returns 11
