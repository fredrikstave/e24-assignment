import React, { Component } from 'react';
import { ListGroup, ListGroupItem } from 'react-bootstrap';

export const DataListPlaceholder = () => (
    <ListGroup>
        <ListGroupItem header="Laster inn...">Lastet ned 0 ganger</ListGroupItem>
        <ListGroupItem header="Laster inn...">Lastet ned 0 ganger</ListGroupItem>
        <ListGroupItem header="Laster inn...">Lastet ned 0 ganger</ListGroupItem>
        <ListGroupItem header="Laster inn...">Lastet ned 0 ganger</ListGroupItem>
        <ListGroupItem header="Laster inn...">Lastet ned 0 ganger</ListGroupItem>
    </ListGroup>
);

export default class DataList extends Component {
    static propTypes = {
        items: React.PropTypes.array.isRequired,
        textFormat: React.PropTypes.string
    }

    render() {
        return (
            <ListGroup>
                {this.props.items.map((item, index) => {
                    let header = `${index+1}. ${item.title}`;
                    let description = item.count;

                    return <ListGroupItem key={index} href={item.url} target="_blank" header={header}>
                        {description}
                    </ListGroupItem>;
                })}
            </ListGroup>
        );
    }
}