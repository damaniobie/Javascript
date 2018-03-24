(function main() {
   
    function linearSearch(arr,value){
        var found = false;
        var indexesFound = "";
        console.log(value+" was found in the indexes: ");
        for(var i=0;i<arr.length;i++){
            if(arr[i] == value){
                found = true;
                console.log(i + " ");
                indexesFound += i + " ";
            }
        }
        if(!found){
            console.log("None");
        }
        console.log("\n");
        return indexesFound;
    }
    
    //////////TEST///////////////
    
    arr = [56,78,32,99,31,70,12,43,68,32,87,98,545,12,524,864,348,7,12];
    linearSearch(arr,12)
}());
