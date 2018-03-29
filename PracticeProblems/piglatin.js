function pigLatin(str){
    if(!(str[0] == 'a' || str[0] == 'e' || str[0] == 'i' || str[0] == 'o' || str[0] == 'u')){
    var t = str[0] + "ay";
    }else{
    var t = "ay";
    }
    //return str.replace(str[0],"")+t;
    return str.slice(1)+t;
}

console.log(pigLatin("banana")); //returns ananabay
console.log(pigLatin("pilgrim")); //returns ilgrimpay
console.log(pigLatin("awesome")); //returns wesomeay
