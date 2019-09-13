import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router
} from 'react-router-dom';

// components
import Header from './components/headerComponent/header';

// includes
import './Assets/css/default.min.css';

class App extends Component {
  render() {
    return (
      <Router>
        <div className="App">
          <Header />
        </div>
      </Router>
    );
  }
}

export default App;
