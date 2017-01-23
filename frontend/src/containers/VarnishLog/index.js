import React, { Component } from 'react';
import { Col } from 'react-bootstrap';
import { connect } from 'react-redux';
import { addVarnishLogEntriesAction } from '../../redux/actions';
import DataList, { DataListPlaceholder } from '../../components/DataList';
import './style.css';

function mapStateToProps(state) {
    return state.varnishLogEntries;
}

function mapDispatchToProps(dispatch) {
    dispatch(addVarnishLogEntriesAction());

    return {};
}

class VarnishLog extends Component {
    renderDataList() {
        if (this.props.data) {
            return this.props.data.map((list, index) => {
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

export default connect(mapStateToProps, mapDispatchToProps)(VarnishLog);