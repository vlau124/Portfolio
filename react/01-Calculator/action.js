//Simple Calculator Created by Victor

class Calculator extends React.Component {
  constructor(props) {
    super(props);
  }
  
  //set initial value of variables
  state = {
    value: null,
    displayValue: "0",
    operator: null,
    prevOperator: null,
    prevValue: 0,
    operatorPressed: false
  }
  
  inputDigit(digit) {    
    const {displayValue, operatorPressed} = this.state

    if (displayValue == "0") { //remove the 0 if the display is 0
      this.setState({
        displayValue: digit
      });
    } else if (operatorPressed == true) {
      this.setState({
        displayValue: String(digit),
        operatorPressed: false
        });
    } else if (operatorPressed == false){
      this.setState({
        displayValue: String(displayValue) + String(digit) //We need to conver to string or it will do math
      });
    }
  }//end of inputDigit
  
  //decimal
  inputDecimal() {
    const {displayValue} = this.state
    
    if (String(displayValue).indexOf(".") > -1) { //do not input (.) if someone already inputs (.)
      this.setState({
        //do nothing
      });
    } else {
      this.setState({
        displayValue: String(displayValue) + "." //We need to conver to string or it will do math
      });
    }
  }//end of decimal
  
  //clear
  inputClear() {
    const {displayValue, operatorPresed, prevValue, operator} = this.state
    
    this.setState({
      displayValue: "0",
      operatorPressed: false,
      prevValue: 0, //remove previous value and operator to keep things simple
      operator: null,
      prevOperator: null
    });
  }//end of Clear
  
  //operator
  inputOperator(digit) {
    const {displayValue, prevValue, operator, operatorPressed, prevOperator} = this.state
    
    if (prevOperator != null) {
      /*
      check for multiple operations will be added later
      for now i need to move on to other things
      ex 2x2x2x2 = 16
      
      mathCalculate()
      */
    }
    
    this.setState({
      prevValue: displayValue,
      prevOperator: operator,
      operator: digit,
      operatorPressed: true
    });
    
    console.log(prevValue);
    console.log(operator);
    console.log(operatorPressed);
  }//end of inputOperator
  
  mathCalculate () {
    const {displayValue, prevValue, operator, operatorPressed} = this.state
    
    var output = 0;
    
    if (operator == "+") {
      //convert strings to numbers
      //we are not using parseInt because of decimals and decimal point spaces
      output = Number(prevValue) + Number(displayValue); 
    } else if (operator == "-") {
      output = prevValue - displayValue;
    } else if (operator == "x") {
      output = prevValue * displayValue;
    } else if (operator == "/") {
      output = prevValue / displayValue;
    }
    
    //update the display
    this.setState({
      displayValue: output,
      operatorPressed: true,
      prevValue: 0, //remove previous value and operator to keep things simple
      operator: null
    });
  }//end of mathCalculate
  
  /*react can only render 1 node
  so something like
  <div><p>asdf</p></div>
  <div><p>asdf</p></div>
  <div><p>asdf</p></div>
  wouldnt work
  but we can have divs inside of divs
  */
  
  //<button class="c-numbers" onClick={(e) => this.handleClick(e)}>7</button>
  
  render() {
    const {displayValue} = this.state
    
    return (
    <div className="frame">
      <Title text="Hello this is a simple calculator" />
      

      <div className="calculator-frame">
        <div className="c-display">{displayValue}</div>
          {/* 
            Would be better to pass in a function to create the buttons
            will do this when i have more time
            <CalcButton /> pass in class & digits
          */}
        <div className="c-number-frame">
          <button className="c-clear" onClick={() => this.inputClear()}>Clear</button>
          <button className="c-numbers" onClick={() => this.inputDigit(7)}>7</button>
          <button className="c-numbers" onClick={() => this.inputDigit(8)}>8</button>
          <button className="c-numbers" onClick={() => this.inputDigit(9)}>9</button>
          <button className="c-numbers" onClick={() => this.inputDigit(4)}>4</button>
          <button className="c-numbers" onClick={() => this.inputDigit(5)}>5</button>
          <button className="c-numbers" onClick={() => this.inputDigit(6)}>6</button>
          <button className="c-numbers" onClick={() => this.inputDigit(1)}>1</button>
          <button className="c-numbers" onClick={() => this.inputDigit(2)}>2</button>
          <button className="c-numbers" onClick={() => this.inputDigit(3)}>3</button>
          <button className="c-numbers2" onClick={() => this.inputDigit(0)}>0</button>
          <button className="c-numbers" onClick={() => this.inputDecimal()}>.</button>
        </div>
        
        <div className="c-operator-frame">
          <button className="c-operator" onClick={() => this.inputOperator("/")}>/</button>
          <button className="c-operator" onClick={() => this.inputOperator("x")}>x</button>
          <button className="c-operator" onClick={() => this.inputOperator("-")}>-</button>
          <button className="c-operator" onClick={() => this.inputOperator("+")}>+</button>
          <button className="c-operator" onClick={() => this.mathCalculate()}>=</button>
        </div>
        
      </div>{/*End of calculator frame*/}
      
      
    </div>
    ); //end of return
  }//end of render
  
}//end of Calculator

function Title(props) {
  return (
      <div>
      <h3>{props.text}</h3>	
    </div>
  );
}


ReactDOM.render(
  <Calculator />,
  document.getElementById('root')
);
