import React, { Component } from 'react';
import Article, { ArticlePlaceholder } from '../../components/Article';
import { BASE_URL } from '../../env';

class TestData extends Component {
    constructor() {
        super();
        this.state = {};
    }

    componentDidMount() {
        var _this = this;
        fetch(`${BASE_URL}/test-data`)
            .then((response) => response.json())
            .then((json) => {
                _this.setState({
                    articles: json
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

    renderContent() {
        if (this.state.articles) {
            return this.state.articles.map((article, index) => {
                return (
                    <Article
                        key={index}
                        title={article.title}
                        description={article.description}
                        link={article.link}
                        pubDate={article.publishDate}
                    />
                );
            });
        } else {
            // Render 10 article placeholders
            return [...Array(10).keys()].map((index) => {
                return <ArticlePlaceholder key={index} />;
            });
        }
    }

    render() {
        return (
            <div className="section">
                {this.renderHeader()}
                {this.renderContent()}
            </div>
        );
    }
}

export default TestData;