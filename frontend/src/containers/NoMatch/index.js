import React, { Component } from 'react';
import epic from './epic.gif';

export default class NoMatch extends Component {
    render() {
        return (
            <div className="section">
                <h1>404</h1>
                <p><em>Oops! It seems that you lost your way whils't searching for the Pick of Destiny. Try using the menu Jack is pointing at ;)</em></p>
                <center>
                    <img src={epic} role="presentation" width="400" />
                </center>
            </div>
        );
    }
}