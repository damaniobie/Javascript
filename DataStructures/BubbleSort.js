function swap(arr, x, y){
    var temp = arr[x];
    arr[x] = arr[y];
    arr[y] = temp;
}

function bubble_Sort(arr){
    var len = arr.length,
        i, j, stop;

    for (i=0; i < len; i++){
        for (j=0, stop=len-i; j < stop; j++){
            if (arr[j] > arr[j+1]){
                swap(arr, j, j+1);
            }
        }
    }

    return arr;
}

///////TEST/////////
arr = [45,76,1,88,100,5,18,368,1007,234,7,95,22];
console.log("Original array: "+arr);
console.log("Bubble Sorted array: "+ bubble_Sort(arr));
