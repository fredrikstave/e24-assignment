import React, { Component } from 'react';
//import { Provider } from 'react-redux';
//import { createStore } from 'redux';
//import appStore from './reducers';

class About extends Component {
    render() {
        return (
            <div className="section">
                <h1>About</h1>
                <p>This application is a simple React front-end to display content from several external sources using different formats.</p>
                <p>To see the different data, you can navigate using the meny located in the header.</p>
            </div>
        );
    }
}

export default About;