function titleCase(str) {
  return str.toLowerCase().split(' ').map(function(word) {
    return (word.charAt(0).toUpperCase() + word.slice(1));
  }).join(' ');
}

//Function to capitalize first letter of every word
console.log(titleCase("she'll be coming round the mountain when she comes")); //returns She'll Be Coming Round The Mountain When She Comes
