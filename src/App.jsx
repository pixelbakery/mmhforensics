import React from 'react';
import {BrowserRouter, Switch, Route } from 'react-router-dom';

import Home from './pages/Home';
import Team from './pages/Team';
import Manifesto from './pages/Manifesto';
import Mission from './pages/Mission';
import Nav from './components/nav';
import Footer from './components/footer'

const ErrorPage = () => {
  return (
    <div style={{ textAlign: "center" }}>
      <h1> 404: Page Not Found</h1>
    </div>
  );
};


function App() {
  return (
    <BrowserRouter>
    <div className=""> 
      <Nav />
      
      <Switch>
        <Route path="/" component={Home} exact />
        <Route path="/team" component={Team} exact />
        <Route path="/manifesto" component={Manifesto} exact />
        <Route path="/mission" component={Mission} exact />
        <Route component={ErrorPage} />   
      </Switch>
      <Footer />
    </div>
    </BrowserRouter>
  )
}

export default App