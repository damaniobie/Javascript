(function main() {
    class Node{
        constructor(data,left=null,right=null){
            this.data = data;
            this.left = left;
            this.right = right;
        }
        
        insert(value){
            if(value < this.data){
                if(this.left === null){
                    this.left = new Node(value);
                    return;
                }else{
                    this.left.insert(value);
                }
            }else{
                if(this.right === null){
                    this.right = new Node(value);
                }else{
                    this.right.insert(value);
                }
            }
        }
        
        contains(value){
            if(value===this.data){
                return true;
            }else if(value < this.data){
                if(this.left===null){
                    return false;
                }else{
                    return this.left.contains(value);
                }
            }else{
                if(this.right===null){
                    return this.right.contains(value);
                }
            }
        }
        
        printTree(){
            if(this.left !== null){
                this.left.printTree();
            }
            console.log(this.data);
            if(this.right!==null){
                this.right.printTree();
            }
        }
    }
    
    ///////TEST////////////
    
    var n = new Node(100);
    n.insert(30);
    n.insert(350);
    n.insert(10);
    n.insert(60);
    n.insert(78);
    n.printTree();
}());
