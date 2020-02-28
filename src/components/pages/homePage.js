import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import { Grid, Cell } from 'react-md';

class Homepage extends Component {
  render() {
    return (
      <div>
          <Grid>
            <Cell size={12}>
              <h1>
                Home
              </h1>
            </Cell>
          </Grid>
          <Grid>
            <Cell size={12}>
              <p>
                This is the home page.
              </p>
            </Cell>
          </Grid>
      </div>
    );
  }
}

export default Homepage;