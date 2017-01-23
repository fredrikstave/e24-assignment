import React, { Component } from 'react';
import { ListGroup, ListGroupItem } from 'react-bootstrap';

/**
 * Placeholder list that can be rendered while waiting for state to be set
 */
export const DataListPlaceholder = () => (
    <ListGroup>
        <ListGroupItem header="Loading...">Count: 0</ListGroupItem>
        <ListGroupItem header="Loading...">Count: 0</ListGroupItem>
        <ListGroupItem header="Loading...">Count: 0</ListGroupItem>
        <ListGroupItem header="Loading...">Count: 0</ListGroupItem>
        <ListGroupItem header="Loading...">Count: 0</ListGroupItem>
    </ListGroup>
);

export default class DataList extends Component {
    static propTypes = {
        items: React.PropTypes.arrayOf(React.PropTypes.shape({
            title: React.PropTypes.string.isRequired,
            count: React.PropTypes.number.isRequired,
            url: React.PropTypes.string.isRequired
        })).isRequired,
        textFormat: React.PropTypes.string
    }

    render() {
        return (
            <ListGroup>
                {this.props.items.map((item, index) => {
                    let header = `${index+1}. ${item.title}`;
                    let description = item.count;

                    return <ListGroupItem key={index} href={item.url} target="_blank" header={header}>
                        Count: {description}
                    </ListGroupItem>;
                })}
            </ListGroup>
        );
    }
}