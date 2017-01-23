import React from 'react';
import { render } from 'react-dom';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import reduxThunk from 'redux-thunk';
import { Router, Route, IndexRoute, browserHistory } from 'react-router';
import appStore from './redux/reducers';
import App from './containers/App';
import About from './containers/About';
import VarnishLog from './containers/VarnishLog';
import VGNett from './containers/VGNett';
import TestData from './containers/TestData';
import NoMatch from './containers/NoMatch';

 const createStoreWithMiddleware = applyMiddleware(reduxThunk)(createStore);
 const store = createStoreWithMiddleware(appStore);

render(
    <Provider store={store}>
        <Router history={browserHistory}>
            <Route path="/" component={App}>
                <Route path="varnish-log" component={VarnishLog} />
                <Route path="vg-nett" component={VGNett} />
                <Route path="test-data" component={TestData} />
                <IndexRoute component={About} />
                <Route path="*" component={NoMatch} />
            </Route>
        </Router>
    </Provider>,
    document.getElementById('root')
);