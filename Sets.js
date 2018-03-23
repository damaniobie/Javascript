(function main() {
    
    function TheSet(){
        
        var collection =[];
        
        //finds if the element exists in the array
        this.has = function(element){      
            return (collection.indexOf(element) !== -1);
        };
        
        //returns the entire set
        this.values = function(){       
            return collection;
        };
        
        //adds an element to the set, if the element doesnt already exist
        this.add = function(element){
            if(!this.has(element)){
                collection.push(element);
                return true;
            }
            return false;
        };
        
        
        //removes an element
        this.remove = function(element){
            if(this.has(element)){
                var ind = collection.indexOf(element);
                collection.splice(ind,1);
                return true;
            }
            return false;
        };
        
        //returns the size of the set
        this.size = function(){
            return collection.length;
        };
        
        //returns the union of 2 sets
        this.union = function(other){
            var unionSet = new Set();
            var set1 = this.values();
            var set2 = other.values();
            set1.forEach(function(e){
                         unionSet.add(e);
                });
            set2.forEach(function(e){
                         unionSet.add(e);
                });
        return unionSet;
    };
        
        this.intersection = function(other){
            var  intersectionSet = new Set();
            var set1 = this.values();
            set1.forEach(function(e){
                         if(other.has(e)){
                intersectionSet.add(e);
            }
            });
        return intersectionSet;
        };
        
        this.difference = function(other){
            var differenceSet = new Set();
            var set1 = this.values();
            set1.forEach(function(e){
                if(!other.has(e)){
                    differenceSet.add(e);
                }
            });
            return differenceSet;
        };
        
        this.subset = function(other){
            var set1 = this.values();
            return set1.every(function(value){
                return other.has(value);
            });
        };
    }    
        ///////////TEST////////////
        
    var s1 = new TheSet();
    var s2 = new TheSet();
        
    s2.add("g");
        s1.add("b");
        s2.add("y");
        s1.add("b");
        s2.add("a");
        s2.add("q");
        s1.add("h");
        s2.add("k");
        s1.add("g");
        
        console.log(s1.difference(s2));
    console.log(s1.union(s2));
    console.log(s1.intersection(s2));
    console.log(s1.size());
    console.log(s1.remove("h"));
    console.log(s1.values());
        
    
}());
    

    
    
