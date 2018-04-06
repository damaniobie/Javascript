Dog = function(name,breed, color){
    this.name = name;
    this.breed = breed;
    this.color = color;
    
    this.bark = function(){
        console.log("Woof");
    };
    
    this.greet = function(){
        console.log("Hi i am "+this.name);
    };
    
    this.fav_movies = [];
    this.add_movies = function(movie){
        this.fav_movies.push(movie);
    };
    this.milestones = [];
    this.add_milestones = function(...num){
        this.milestones.push(num);
    };
    
}

var d = new Dog("damani","wolf","green");
var x = new Dog("Reggie","cat","blue");

x.greet();
x.add_movies("The man");
console.log(x.fav_movies);
        
d.add_milestones(5,8,9,10,17);
        console.log(d.milestones);
console.log(x.milestones);
