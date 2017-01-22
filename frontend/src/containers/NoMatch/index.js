import React, { Component } from 'react';
import { Link } from 'react-router';

export default class NoMatch extends Component {
    render() {
        return (
            <div className="section">
                <h1>404</h1>
                <p>Huff da, det gikk visst ikke så bra det.</p>
                <p>Det ser ut som du prøvde å åpne en side som ikke finnes. Sånt må du jo ikke gjøre ;)</p>
                <p><Link to="/">Gå tilbake til forsiden</Link></p>
            </div>
        );
    }
}