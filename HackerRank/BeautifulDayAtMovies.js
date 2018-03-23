process.stdin.resume();
process.stdin.setEncoding('ascii');

var input_stdin = "";
var input_stdin_array = "";
var input_currentline = 0;

process.stdin.on('data', function (data) {
    input_stdin += data;
});

process.stdin.on('end', function () {
    input_stdin_array = input_stdin.split("\n");
    main();    
});

function readLine() {
    return input_stdin_array[input_currentline++];
}

/////////////// ignore above this line ////////////////////

function reverse(x){
    var rev = x.toString().split('').reverse().join('');
    return rev;
}


function beautifulDays(i, j, k) {
    var day = i,count=0;
    var rev_day = reverse(day);
    while(i <= j){
        if((Math.abs(day - rev_day) % k) == 0){count+=1;}
        i++;
        day++;
    }
    return count;
}


function main() {
    var i_temp = readLine().split(' ');
    var i = parseInt(i_temp[0]);
    var j = parseInt(i_temp[1]);
    var k = parseInt(i_temp[2]);
    var result = beautifulDays(i, j, k);
    process.stdout.write("" + result + "\n");

}
