function insertion_Sort(arr)
{
  for (var i = 1; i < arr.length; i++) {
    if (arr[i] < arr[0]) 
    {
      //move current element to the first position
      arr.unshift(arr.splice(i,1)[0]);
    } 
    else if (arr[i] > arr[i-1]) 
    {
      //leave current element in its current position
      continue;
    } 
    else {
      //find where element should go
      for (var j = 1; j < i; j++) {
        if (arr[i] > arr[j-1] && arr[i] < arr[j]) 
        {
          //move element
          arr.splice(j,0,arr.splice(i,1)[0]);
        }
      }
    }
  }
  return arr;
}

/////////////TEST////////////////

arr = [45,76,1,88,100,5,18,368,1007,234,7,95,22];
console.log("Original array: "+arr);
console.log("Sorted array: "+insertion_Sort(arr));
