function repeatString(str,num){
    if(num === 1){
        return str;
    }else{
        return str + repeatString(str,num-1);
    }
    //return str.repeat(num); ES6 repeat function
}

console.log(repeatString("Damani",3)); //returns DamaniDamaniDamani
