import React, { Component } from 'react';
import { connect } from 'react-redux';
import { addFeedArticlesAction } from '../../redux/actions';
import Article from '../../components/Article';
import ArticlePlaceholder from '../../components/ArticlePlaceholder';
import './style.css';

function mapStateToProps(state) {
    return state.feedArticles;
}

function mapDispatchToProps(dispatch) {
    dispatch(addFeedArticlesAction());

    return {};
}

class VGNett extends Component {
    renderHeader() {
        if (this.props.data && this.props.data.image && this.props.data.title) {
            return (
                <div className="section__header">
                    <h2>{this.props.data.title}</h2>
                    <img src={this.props.data.image.url} alt={this.props.data.image.title} />
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
        if (this.props.data && this.props.data.articles) {
            return this.props.data.articles.map((article, index) => {
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

export default connect(mapStateToProps, mapDispatchToProps)(VGNett);
