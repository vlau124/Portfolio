// lifting state up

/*
- usually state is first added to the components
- then other components that also need it. 
- passing in variables or (state) / [lift it up] / values to other methods or classes that needs it
- top down data flow
- supposedly less work to find and isolate bugs because
  any state lives in some component and that component alone can change it

*/


const scaleNames = {
  c: 'Celsius',
  f: 'Fahrenheit'
};

//--------------------temperature calculations
function toCelsius(fahrenheit) {
  return (fahrenheit - 32) * 5 / 9;
}

function toFahrenheit(celsius) {
  return (celsius * 9 / 5) + 32;
}

//--------------------Rounding and checking for input
function tryConvert(temperature, convert) {
  const input = parseFloat(temperature);
  if (Number.isNaN(input)) {
    return '';
  }
  const output = convert(input);
  const rounded = Math.round(output * 1000) / 1000;
  return rounded.toString();
}

//---------------------Display Message
function BoilingVerdict(props) {
  if (props.celsius >= 100) {
    return <p>The water would boil.</p>;
  }
  return <p>The water would not boil.</p>;
}


class TemperatureInput extends React.Component {
  constructor(props) {
    super(props);
    this.handleChange = this.handleChange.bind(this);
  }

  //updates temperature when called this.handleChange
  handleChange(e) {
    this.props.onTemperatureChange(e.target.value);
  }

  /*
  -Display form fields
  -Get input on change
  -call classes to calculate is in calculator
  -const celsius = scale === 'f' ? tryConvert(temperature, toCelsius) : temperature;
  -Display output
  */
  render() {
    //const temperature = this.state.temperature;
    const temperature = this.props.temperature;
    const scale = this.props.scale;
    return (
      <fieldset>
        <legend>Enter temperature in {scaleNames[scale]}:</legend>
        <input value={temperature}
               onChange={this.handleChange} />
      </fieldset>
    );
  }
}// end of Temperature input

//----------------------Displays the form [PARENT]
class Calculator extends React.Component {
  constructor(props) {
    super(props);
    this.handleCelsiusChange = this.handleCelsiusChange.bind(this);
    this.handleFahrenheitChange = this.handleFahrenheitChange.bind(this);
    this.state = {temperature: '', scale: 'c'};
  }

  //handles state change for fahrenheit when someone types
  handleCelsiusChange(temperature) {
    this.setState({scale: 'c', temperature});
  }

  //handles state change for celsius when someone types
  handleFahrenheitChange(temperature) {
    this.setState({scale: 'f', temperature});
  }

  render() {
    //define variables
    const scale = this.state.scale;
    const temperature = this.state.temperature;
    /* what is the ?
    Conditional (Ternary) operator
    variablename = (condition) ? value1:value2
    ex. voteable = (age < 18) ? "Too young":"Old enough";
    if (scale === 'c') {celseius = converted temperature or current temperature}
    */
    //TEMPERATURE CONVERSION IS CALLED HERE
    const celsius = scale === 'f' ? tryConvert(temperature, toCelsius) : temperature;
    const fahrenheit = scale === 'c' ? tryConvert(temperature, toFahrenheit) : temperature;

    /* Calls the following classes and function
    -TemperatureInput for celsius
    -TemperatureInput for fahrenheit
    -BoilingVerdict
    Display the output in those classes
    */
    //PARENT
    return (
      <div>
        <TemperatureInput
          scale="c"
          temperature={celsius}
          onTemperatureChange={this.handleCelsiusChange} />
        <TemperatureInput
          scale="f"
          temperature={fahrenheit}
          onTemperatureChange={this.handleFahrenheitChange} />
        <BoilingVerdict
          celsius={parseFloat(celsius)} />
      </div>
    );
  }
}

ReactDOM.render(
  <Calculator />,
  document.getElementById('root')
);


