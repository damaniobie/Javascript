'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(str => str.trim());

    main();
});

function readLine() {
    return inputString[currentLine++];
}

/*
 * Complete the miniMaxSum function below.
 */
function miniMaxSum(arr) {
    var max = 0, min = arr[0],final_max = 0,final_min = 0;
    for(var i=0;i<arr.length;i++){
        if(arr[i]> max){
            max = arr[i];
        }
        if(arr[i] < min){
            min = arr[i];
        }
    }
    for(var i=0;i<arr.length;i++){
        final_max += arr[i];
        final_min += arr[i];
    }
    final_max -= max;
    final_min -= min;
    console.log(final_max+" "+final_min);

}

function main() {
    const arr = readLine().split(' ').map(arrTemp => parseInt(arrTemp, 10));

    miniMaxSum(arr);
}
