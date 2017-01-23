import React, { Component } from 'react';
import './article-placeholder.css';

export default class ArticlePlaceholder extends Component {
    static propTypes = {
        hasImage: React.PropTypes.bool
    }

    textElement() {
        if (this.props.hasImage) {
            return <span className="article-placeholder__text element" />;
        } else {
            return <span className="article-placeholder__text element no-image" />;
        }
    }

    render() {
        return (
            <div className="article-placeholder">
                <div className="article-placeholder__wrapper">
                    {this.props.hasImage && <div className="article-placeholder__image" />}
                    <div className="article-placeholder__content">
                        <span className="article-placeholder__title element" />
                        <span className="article-placeholder__published element" />
                        {this.textElement()}
                        {this.textElement()}
                        {this.textElement()}
                    </div>
                </div>
            </div>
        );
    }
}
