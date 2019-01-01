class MaxStack {
  constructor() {
    this.stack = new Stack();
    this.maxesStack = new Stack();
  }

  // Add a new item to the top of our stack. If the item is greater
  // than or equal to the last item in maxesStack, it's
  // the new max! So we'll add it to maxesStack.
  push(item) {
    this.stack.push(item);
    if (this.maxesStack.peek() === null || item >= this.maxesStack.peek()) {
      this.maxesStack.push(item);
    }
  }

  // Remove and return the top item from our stack. If it equals
  // the top item in maxesStack, they must have been pushed in together.
  // So we'll pop it out of maxesStack too.
  pop() {
    const item = this.stack.pop();
    if (item === this.maxesStack.peek()) {
      this.maxesStack.pop();
    }
    return item;
  }

  // The last item in maxesStack is the max item in our stack.
  getMax() {
    return this.maxesStack.peek();
  }
}
