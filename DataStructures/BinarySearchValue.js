function binarySearch(arr, value){
    var low = 0, high = arr.length - 1;
    
    while(low <= high){
        var mid = Math.floor((high + low) / 2);
        if(arr[mid] < value){
            low = mid + 1;
        }else if(arr[mid] > value){
            high = mid - 1;
        }else{
            console.log(value+" found at "+ mid);
            return;
            }
        }
    console.log("not found");
    }


arr = [56,78,32,99,31,70,12,43,68,32,87,98,545,12,524,864,348,7,12];
binarySearch(arr,80);
