function findLongestWord(str) {
  var strSplit = str.split(' ');//turns string into an array indexfor every space that appears
  var longestWord = 0;
  for(var i = 0; i < strSplit.length; i++){
    if(strSplit[i].length > longestWord){
	longestWord = strSplit[i].length;
     }
  }
  return longestWord;
}

//console.log(findLongestWord("I want to understand what is going on through your mind")); returns 10
