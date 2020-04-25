import React from 'react';
import Category from './components/templates/Category/Category';
import Bootstrap from './components/HOC/Bootstrap';
import Tokens from './components/pages/Tokens';
import { 
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";

import theme from './assets/scss/global.module.scss';

function App() {
  

  return (

    <Bootstrap>
      <div className={theme.bg__normal}>
        <Router>
          <Switch>
            
            <Route path="/tokens">
              <Tokens />
            </Route>

            <Route path="/">
              <Category />
            </Route>

          </Switch>
        </Router>
      </div>
    </Bootstrap>
  );
}

export default App;
