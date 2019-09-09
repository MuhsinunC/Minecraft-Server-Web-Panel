import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';
import { Grid, Cell } from 'react-md';

class Header extends Component {
  render() {
    return (
      <header>
        <div>
          <Grid>
            <Cell size={6}>
              Header
            </Cell>
            <Cell size={6}>
              <center>
                <Link to='/'>Home</Link>
                <Link to='/About'>About</Link>
              </center>
            </Cell>
          </Grid>
        </div>
      </header>
    );
  }
}

export default Header;
