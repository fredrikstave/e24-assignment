import React, { Component } from 'react';
import { Link } from 'react-router';
import './style.css';

export default class Header extends Component {
    constructor() {
        super();
        this.state = {
            menuToggled: false
        };
        this.toggleMenu = this.toggleMenu.bind(this);
    }

    /**
     * Set the menu class based on the menuToggled state
     */
    menuClass() {
        if (this.state.menuToggled) {
            return 'header__menu toggled';
        }
        
        return 'header__menu';
    }

    /**
     * Switch the menuToggled state
     */
    toggleMenu() {
        this.setState({
            menuToggled: !this.state.menuToggled
        });
    }

    render() {
        return (
            <div className="header">
                <button className="header__toggle" onClick={this.toggleMenu}>
                    <span className="material-icons">menu</span> Menu
                </button>

                <div className={this.menuClass()}>
                    <Link to="/" className="header__menu__link">Home</Link>
                    <Link to="/varnish-log" className='header__menu__link' activeClassName="active">Varnish Logg</Link>
                    <Link to="/vg-nett" className="header__menu__link" activeClassName="active">VG Nett Feed</Link>
                    <Link to="/test-data" className="header__menu__link" activeClassName="active">Test data</Link>
                </div>
            </div>
        );
    }
}