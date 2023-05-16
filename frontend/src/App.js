import React from "react";
import { Switch, Route, BrowserRouter, Redirect } from "react-router-dom";
import Login from "./components/Login/Login";
import Register from "./components/Register/Register";
import Home from "./components/Home/Home";
import Profile from "./components/Profile/Profile";
import HomeAdmin from "./components/HomeAdmin/HomeAdmin";
import HomeManger from "./components/HomeManger/HomeManger";

function App() {
  return (
    <BrowserRouter>
      <Switch>
        <Route exact path="/" component={Home} />
        <Route exact path="/home/provider" component={HomeAdmin} />
        <Route exact path="/home/workshop" component={HomeManger} />
        <Route path="/register" component={Register} />
        <Route exact path="/workshop/login" component={Login} />
        <Route exact path="/profile" component={Profile} />
        <Route exact path="/provider/login">
          <Login type={true} />{" "}
        </Route>
        <Redirect to="/" />
      </Switch>
    </BrowserRouter>
  );
}

export default App;
