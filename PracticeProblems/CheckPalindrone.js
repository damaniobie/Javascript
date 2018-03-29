function checkpalindrone(str){ //this one doesnt account for spaces after commas or periods
    var rev = [];
    str = str.toLowerCase();
    for(var i=str.length-1,j=0;j<str.length;i--,j++){
        rev[j] = str[i];
    }
    return rev.join('') === str;
}

console.log("My age is 0, 0 si ega ym."); //returns false;
console.log("My age is 0,0 si ega ym"); //returns true;
