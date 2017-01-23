import React, { Component } from 'react';

export default class About extends Component {
    render() {
        return (
            <div className="section">
                <h1>About</h1>
                <p>This application is a simple React front-end to display content served by a Symfony back-end.</p>
                <p>To make the application feel fast, I've used Redux to handle application state. This means data is only downloaded on first page load, and after that it's kept in a store object.</p>
                <p>To view the different data you can navigate using the menu above.</p>
            </div>
        );
    }
}