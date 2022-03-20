import React from "react";
import ReactDOM from "react-dom";
import Home from "./Index";
import store from "../../redux/store";
import {Provider} from "react-redux";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";

function App() {
    return (
        <div className="App">
            <Route path="/" exact component={Home}/>
        </div>
    );
}

ReactDOM.render(
    <Home />,
    document.getElementById("wrapper")
);
