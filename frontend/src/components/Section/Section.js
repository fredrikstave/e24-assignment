import React, { Component } from 'react';
import './style.css';

export default class Section extends Component {
    static propTypes = {
        title: React.PropTypes.string,
        image: React.PropTypes.shape({
            url: React.PropTypes.string.isRequired,
            title: React.PropTypes.string.isRequired,
            link: React.PropTypes.string
        })
    }

    /**
     * If either the title or image property is set, the section header is rendered
     */
    renderHeader() {
        if (this.props.title || this.props.image) {
            return (
                <div className="section__header">
                    {this.props.title && <h2>{this.props.title}</h2>}
                    {this.props.image && <img src={this.props.image.url} alt={this.props.image.title} />}
                </div>
            );
        }
    }

    render() {
        return (
            <div className="section">
                {this.renderHeader()}
                {this.props.children}
            </div>
        );
    }
}