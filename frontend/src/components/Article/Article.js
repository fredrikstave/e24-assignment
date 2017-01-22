import React, { Component } from 'react';
import { Media } from 'react-bootstrap';
import moment from 'moment';
import './style.css';

export class ArticlePlaceholder extends Component {
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

export default class Article extends Component {
    static propTypes = {
        title: React.PropTypes.string.isRequired,
        description: React.PropTypes.string,
        link: React.PropTypes.string.isRequired,
        image: React.PropTypes.string,
        pubDate: React.PropTypes.string.isRequired
    }

    renderDescription() {
        if (this.props.description) {
            return <p className="article__excerpt">{this.props.description}</p>;
        }
    }

    renderImage() {
        if (this.props.image || this.props.image === "") {
            let articleImage = this.props.image;

            // Use default placeholder image if image property isn't set
            if (articleImage === "") {
                articleImage = require('./article-placeholder.png');
            }

            return (
                <Media.Left align="top">
                    <img width={128} src={articleImage} alt={this.props.title} />
                </Media.Left>
            );
        }
    }

    render() {
        // Format publish date correctly to norwegian date format
        let publishDate = moment(this.props.pubDate).locale('nb').format('LLLL');
        
        return (
            <div className="article">
                <a href={this.props.link} target="_blank">
                    <Media>
                        {this.renderImage()}
                        <Media.Body>
                            <Media.Heading>{this.props.title}</Media.Heading>
                            <em>Publisert {publishDate}</em>
                            {this.renderDescription()}
                        </Media.Body>
                    </Media>
                </a>
            </div>
        );
    }
}