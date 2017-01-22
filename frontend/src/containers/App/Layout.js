import React, { Component } from 'react';
import { Link } from 'react-router';

const NavLink = (props) => <Link {...props} className="app__header__menu__link" activeClassName="active" />;

export class Header extends Component {
    is
    render() {
        return (
            <header className="app__header">
                <nav className="app__header__menu">
                    <Link className="app__header__menu__link" to="/">Home</Link>
                    <NavLink to="/varnish-log">Varnish Logg</NavLink>
                    <NavLink to="/vg-nett">VG Nett Feed</NavLink>
                    <NavLink to="/test-data">Test data</NavLink>
                </nav>
            </header>
        );
    }
}
