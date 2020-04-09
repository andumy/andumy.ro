import React from 'react';
import Category from './components/templates/Category/Category';
import { useSelector, useDispatch } from 'react-redux';
import * as authAction from './actions/auth.action';
import { 
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";

import { AppState } from './reducers';
import { Auth as AuthType } from './types/Auth/Auth';


function App() {

  const auth = useSelector<AppState, AuthType>(state => state.auth);
  const dispatch = useDispatch();

  if(auth.token === ''){
    dispatch(authAction.getAuthToken());
  }

  return (
    <div className="App">
      <Router>
        <Switch>
          <Route path="/">
            <Category />
          </Route>
        </Switch>
      </Router>
    </div>
  );
}

export default App;
