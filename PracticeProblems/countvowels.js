function countVowel(str){
    var num_vow = 0;
    var num_a = 0, num_e = 0,num_i = 0,num_o = 0,num_u = 0;
    for(var i = 0;i<str.length;i++){
        if(str[i] == 'a'){
            num_vow++;
            num_a++;
        }else if(str[i] == 'e'){
            num_vow++;
            num_e++;
        }else if(str[i] == 'i'){
            num_vow++;
            num_i++;
        }else if(str[i] == 'o'){
            num_vow++;
            num_o++;
        }else if(str[i] == 'u'){
            num_vow++;
            num_u++;
        }
    }
    console.log("number of vowels: "+num_vow);
    console.log("number of a: "+num_a);
    console.log("number of e: "+num_e);
    console.log("number of i: "+num_i);
    console.log("number of o: "+num_o);
    console.log("number of u: "+num_u);
}
