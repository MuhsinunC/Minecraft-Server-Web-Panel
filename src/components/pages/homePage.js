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
                Home Page Content Here
              </h1>
            </Cell>
          </Grid>
          <Grid>
            <Cell size={12}>
              <p>
                Hello there these are words. Blah.
              </p>
            </Cell>
          </Grid>
      </div>
    );
  }
}

export default Homepage;