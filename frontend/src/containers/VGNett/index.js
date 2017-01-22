import React, { Component } from 'react';
import fetch from 'isomorphic-fetch';
import { BASE_URL } from '../../env';
import Article, { ArticlePlaceholder } from '../../components/Article';
import './style.css';

export default class VGNett extends Component {
    constructor() {
        super();
        this.state = {};
    }

    componentDidMount() {
        var _this = this;
        fetch(`${BASE_URL}/feed`)
            .then((response) => response.json())
            .then((json) => {
                _this.setState({
                    title: json.title,
                    description: json.description,
                    link: json.link,
                    image: json.image,
                    articles: json.articles
                });
            });
    }

    renderHeader() {
        if (this.state.image && this.state.title) {
            return (
                <div className="section__header">
                    <h2>{this.state.title}</h2>
                    <img src={this.state.image.url} alt={this.state.image.title} />
                </div>
            );
        } else {
            return (
                <div className="section__header">
                    <h2>Laster</h2>
                </div>
            );
        }
    }

    renderArticles() {
        if (this.state.articles) {
            return this.state.articles.map((article, index) => {
                return (
                    <Article
                        key={index}
                        title={article.title}
                        description={article.description}
                        link={article.link}
                        image={article.image}
                        pubDate={article.publishDate}
                    />
                );
            });
        } else {
            // Render 10 article placeholders
            return [...Array(10).keys()].map((index) => {
                return <ArticlePlaceholder key={index} hasImage={true} />;
            });
        }
    }

    render() {
        return (
            <div className="section">
                {this.renderHeader()}
                {this.renderArticles()}
            </div>
        )
    }
}