
function quick_Sort(arr) {
	if (arr.length <= 1) { 
		return arr;
	} else {

		var left = [];
		var right = [];
		var newArray = [];
		var pivot = arr.pop();
		var length = arr.length;

		for (var i = 0; i < length; i++) {
			if (arr[i] <= pivot) {
				left.push(arr[i]);
			} else {
				right.push(arr[i]);
			}
		}

		return newArray.concat(quick_Sort(left), pivot, quick_Sort(right));
	}
}

///////TEST///////////////


var a = [0,43,21,665,42,778,67,18,159,200 ];

console.log("Original array: " + myArray);
var sortedArray = quick_Sort(myArray);
console.log("Sorted array: " + sortedArray);


