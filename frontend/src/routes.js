import React from 'react';
import App from './containers/App';
import About from './containers/About';
import VarnishLog from './containers/VarnishLog';
import VGNett from './containers/VGNett';
import TestData from './containers/TestData';
import NoMatch from './containers/NoMatch';
import { Route, IndexRoute } from 'react-router';

export default (
    <Route path="/" component={App}>
        <Route path="varnish-log" component={VarnishLog} />
        <Route path="vg-nett" component={VGNett} />
        <Route path="test-data" component={TestData} />
        <IndexRoute component={About} />
        <Route path="*" component={NoMatch} />
    </Route>
);