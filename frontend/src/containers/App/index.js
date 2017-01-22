import React, { Component } from 'react';
import { Header } from './Layout';
import './style.css';

export default class App extends Component {
    render() {
        return (
            <div className="app">
                <Header />
                <main className="app__content">
                    {this.props.children}
                </main>
            </div>
        );
    }
}
