import React, { Component } from 'react';
import { connect } from 'react-redux';
import Article from '../../components/Article';
import ArticlePlaceholder from '../../components/ArticlePlaceholder';
import { addTestDataItemsAction } from '../../redux/actions';

function mapStateToProps(state) {
    return state.testDataItems;
}

function mapDispatchToProps(dispatch) {
    dispatch(addTestDataItemsAction());

    return {};
}

class TestData extends Component {
    renderContent() {
        if (this.props.data) {
            return this.props.data.map((article, index) => {
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
        console.log(this.props);
        return (
            <div className="section">
                {this.renderContent()}
            </div>
        );
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(TestData);