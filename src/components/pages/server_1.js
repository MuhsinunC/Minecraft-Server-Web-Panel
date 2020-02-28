import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import { Grid, Cell } from 'react-md';

//const Rcon = require('modern-rcon');
// 
//const rcon = new Rcon('localhost', 25575, 'testpassword')
// 
//rcon.connect().then(() => {
//  return rcon.send('help'); // Command sent to server
//}).then(res => {
//  console.log(res);
//}).then(() => {
//  return rcon.disconnect();
//});

class Server1 extends Component {
  render() {
    return (
      <div>
          <Grid>
            <Cell size={12}>
              <h1>
                Server 1
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

export default Server1;