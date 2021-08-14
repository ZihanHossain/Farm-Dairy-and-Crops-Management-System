import Login from "./components/Login";
import Dashboard from "./components/manager/Dashboard";
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';

function App() {
  return (
    <div>
      <Router>
        <Switch>
          <Route path="/login">
            <Login />
          </Route>
          <Route path="/manager">
            <Dashboard type='manager'/>
          </Route>
        </Switch>
      </Router>
    </div>
  );
}

export default App;
