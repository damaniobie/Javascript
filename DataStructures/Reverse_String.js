function reverse_str(x){
    var rev = [];
    for(var j=0,i=x.length-1;j<x.length;j++,i--){
        rev[j] = x[i];
    }
    return rev.join("");
    /*
    var newstr = "";
    for(var i=str.length;i>0;i++){
    newstr += str[i];
    }
    return newstr;
    */
}

console.log(reverse_str("damani")); //returns inamad
console.log(reverse_str("super califragilistic expialadocious")); //returns suoicodalaipxe citsiligarfilac repus
