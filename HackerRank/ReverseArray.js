'use strict';

const fs = require('fs');

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
 * Given an array, a, of n integers, print each element in reverse order as a single line of space-separated integers.
 */
function reverseArray(a) {
   var a1 = [];
    for(var i=a.length - 1, j = 0;i>=0;i--,j++){
        a1[j] = a[i];
    }
    return a1;

}
///////TEST//////////

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);

    const arrCount = parseInt(readLine(), 10);

    const arr = readLine().split(' ').map(arrTemp => parseInt(arrTemp, 10));

    let res = reverseArray(arr);

    ws.write(res.join(" ") + "\n");

    ws.end();
}
