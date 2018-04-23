function isEqualTo(number, compare = 10){
    return number == compare;
}

console.log(isEqualTo(10));

let age = 40;
let agefield= "age";


let obj = {
    name:"Billy",
    "dogname":"spotdog",
    [agefield]:50,
    //age: 26,
    "greet me"(){
        console.log(this.name,",",this.age);
    }
}

obj["greet me"]();
console.log(obj.dogname);
console.log(obj.age); //this is getting agefield, because it equals "age"
console.log(obj[agefield]);

function sums(...nums){
    let result = 0;
    for(let i=0;i<nums.length;i++){
        result += nums[i];
    }
    return result;
}

console.log("\n\n\Rest Params. The take a list of nums and make it into an array");
console.log(sums(10,20,30));

let numbers = [1,2,3,446645,5676];
console.log(...numbers); //this is the spread operator. The opposite of rest params
console.log(Math.max(...numbers)); //gets the max in a list of numbers 


let testResults = [1.23,1.1,4.1];

for(r of testResults){ //for-of loop. (foreach loop in java)
    console.log(r);
}

let name2 = "Damani";
let desc = `
Hello, I am ${name2}
`;
console.log(desc);

let arr = [1,2,3];
let [a,b] = arr;
let [a1,...b1] = arr; //creates a new array b1
let [x = 'default',y,z,z1 = 'def'] = arr;
let [a2,b2] = [5,10,15]; //this is easy way to declare 
let [a3,,c3] = arr;
console.log(a);
console.log(b);
console.log(b1);
console.log(x,z1); //prints 1 and 'def' because the 'default' is there just in case its undefn

let n = 20;
let m = 30;
[n,m] = [m,n]; //EASY SWAPPING
console.log(n); //n is now 30

let o = {
    n1:"damani",
    ag:20,
    greet:function(){
        console.log("Hi");
    }
}

let {n1,ag,greet:yo} = o;
console.log(n1,ag);
yo();



