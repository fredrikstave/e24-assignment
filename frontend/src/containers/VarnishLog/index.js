import React, { Component } from 'react';
import { Col } from 'react-bootstrap';
import { connect } from 'react-redux';
import { addVarnishLogEntriesAction } from '../../redux/actions';
import DataList, { DataListPlaceholder } from '../../components/DataList';
import Section from '../../components/Section';
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
                    <Col key={index} xs={12} sm={6}>
                        <h3 className="column-title">{list.title}</h3>
                        <DataList items={list.items} />
                    </Col>
                );
            });
        } else {
            // Render 2 placeholder lists
            return [...Array(2).keys()].map((index) => {
                return (
                    <Col key={index} xs={12} sm={6}>
                        <h3 className="column-title">Title</h3>
                        <DataListPlaceholder />
                    </Col>
                );
            });
        }
    }

    render() {
        return (
            <Section>
                {this.renderDataList()}
            </Section>
        );
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(VarnishLog);