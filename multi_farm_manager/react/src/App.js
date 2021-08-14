import Login from "./components/Login";
import Registration from "./components/customer/Registration";
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
          <Route path="/customer">
            <Dashboard type='customer'/>
          </Route>
          <Route path="/signup">
            <Registration />
          </Route>
        </Switch>
      </Router>
    </div>
  );
}

export default App;
