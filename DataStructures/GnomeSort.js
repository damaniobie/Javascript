function gnomeSort(arr) {
    for (var i = 1; i < arr.length; i++) {
        if (arr[i-1] > arr[i]) 
            move_elem_back(i);
    }
    return arr;
}

 function move_elem_back(i) {
        for( ; i > 0 && arr[i-1] > arr[i]; i--)
        {
            var t = arr[i];
            arr[i] = arr[i-1];
            arr[i-1] = t;
        }
    }

////////TEST/////////////
arr = [45,76,1,88,100,5,18,368,1007,234,7,95,22];
console.log("Original array: "+arr);
console.log("Gnome Sorted array: "+ gnomeSort(arr));
