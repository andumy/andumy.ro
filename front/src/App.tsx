import React from 'react';
import Bootstrap from './components/HOC/Bootstrap/Bootstrap';
import { 
  BrowserRouter as Router,
  Switch,
  Route,
} from "react-router-dom";


import PageSelector from './components/functional/PageSelector/PageSelector';

function App() {
  

  return (

    <Bootstrap>
        <Router>
          <Switch>
            <Route path="/">
              <PageSelector/>
            </Route>
          </Switch>
        </Router>
    </Bootstrap>
  );
}

export default App;
