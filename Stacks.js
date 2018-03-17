 var Stack = function(){
       this.count = 0;
       this.storage = {};
       
       this.push = function(value){
           this.storage[this.count] = value;
           this.count++;
       }
       
       this.pop = function(){
           if(this.count===0){
               return undefined;
           }
           
           this.count--;
           var result = this.storage[this.count];
           delete this.storage[this.count];
           return result;
       }
       
       this.size = function(){
           return this.count;
       }
       
       this.peek = function(){
           return this.storage[this.count - 1];
       }
       
       this.seeAll = function(){
           for(var i=this.count-1;i>=0;i--){
               console.log(this.storage[i]+"\n")
           }
       }
   }
   
   //test
   var s = new Stack();
    s.push(3);
    s.push(7);
    s.push(100);
    s.push("Hey");
    s.push(7754)
   console.log(s.peek());
    //s.seeAll();
    
    //keep in mind you can also just...
    //st = [];
    //st.push(5);
    //st.pop();
    //But that's not as fun
