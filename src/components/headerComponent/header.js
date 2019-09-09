import React from 'react';
//import ReactDOM from 'react-dom';
import { Card, CardTitle, CardText, CardActions, Button } from 'react-md';

function Header() {
  return (
    <div className="md-grid">
        <Card className="md-cell">
          <CardTitle title="Hello, World!" />
          <CardText>
            Lorem ipsum... pretend more ...
          </CardText>
          <CardActions>
            <Button flat label="Action 1" />
            <Button flat label="Action 2" />
          </CardActions>
        </Card>
      </div>
  );
}

export default Header;
