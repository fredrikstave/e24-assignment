import React, { Component } from 'react';
import { Col } from 'react-bootstrap';
import { BASE_URL } from '../../env';
import DataList, { DataListPlaceholder } from '../../components/DataList';
import './style.css';

class VarnishLog extends Component {
    constructor(props) {
        super(props);
        this.state = {}
    }

    componentDidMount() {
        var _this = this;
        fetch(`${BASE_URL}/varnish-log`)
            .then((response) => response.json())
            .then((json) => {
                _this.setState({
                    logEntries: json
                });
            });
    }

    renderDataList() {
        if (this.state.logEntries) {
            return this.state.logEntries.map((list, index) => {
                return (
                    <Col key={index} xs={12} sm={6} className="section__column">
                        <h3>{list.title}</h3>
                        <DataList items={list.items} textFormat="Lastet ned {0} ganger i dag" />
                    </Col>
                );
            });
        } else {
            // Render 10 article placeholders
            return [...Array(2).keys()].map((index) => {
                return (
                    <Col key={index} xs={12} sm={6} className="section__column">
                        <h3>Tittel</h3>
                        <DataListPlaceholder />
                    </Col>
                );
            });
        }
    }

    render() {
        return (
            <div className="section">
                {this.renderDataList()}
            </div>
        );
    }
}

export default VarnishLog;