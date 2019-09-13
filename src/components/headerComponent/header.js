import React, { Component } from 'react';
//import ReactDOM from 'react-dom';
import {
  Link,
  Route
} from 'react-router-dom';
import { NavigationDrawer } from 'react-md';
import FontIcon from 'react-md/lib/FontIcons';

import Homepage from '../pages/homePage';
import About from '../pages/about';
import Footer from '../footerComponent/footer';

function isActive(to, path) {
  //return to === path;
  return true;
}

const inboxListItems = [{
  component: Link,
  to: '/',
  active: isActive('/', 'pathname'),
  primaryText: 'Home',
  leftIcon: <FontIcon>home</FontIcon>,
}, {
  component: Link,
  to: '/about',
  active: isActive('/about', 'pathname'),
  primaryText: 'About',
  leftIcon: <FontIcon>book</FontIcon>,
}, {
  divider: true,
}, {
  component: Link,
  to: '/page-2',
  active: isActive('/page-2', 'pathname'),
  primaryText: 'Page 2',
  leftIcon: <FontIcon>donut_large</FontIcon>,
}, {
  component: Link,
  to: '/page-3',
  active: isActive('/page-3', 'pathname'),
  primaryText: 'Page 3',
  leftIcon: <FontIcon>flight_land</FontIcon>,
}];

class Header extends Component {

  render() {
    return (
      <header>
        <div>
          <div id="navigation-drawer">
            <NavigationDrawer
              toolbarTitle="Minecraft Server Web Panel"
              navItems={inboxListItems}
              mobileDrawerType={NavigationDrawer.DrawerTypes.TEMPORARY_MINI}
              tabletDrawerType={NavigationDrawer.DrawerTypes.PERSISTENT_MINI}
              desktopDrawerType={NavigationDrawer.DrawerTypes.PERSISTENT_MINI}
            >
              <Route exact path='/' component={Homepage} />
              <Route exact path='/About' component={About} />
              <Footer />
            </NavigationDrawer>
          </div>
        </div>
      </header>
    );
  }
}

export default Header;
