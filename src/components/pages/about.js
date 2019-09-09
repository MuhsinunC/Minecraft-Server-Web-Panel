import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import { Grid, Cell } from 'react-md';

class About extends Component {
  render() {
    return (
      <div>
          <Grid>
            <Cell size={12}>
              <h1>
                About Page Content Here
              </h1>
            </Cell>
          </Grid>
          <Grid>
            <Cell size={12}>
              <p>
                My name is Muhsinun Chowdhury.
              </p>
            </Cell>
          </Grid>
      </div>
    );
  }
}

export default About;