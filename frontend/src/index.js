import React from 'react';
import { render } from 'react-dom';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import reduxThunk from 'redux-thunk';
import appStore from './redux/reducers';
import { Router, browserHistory } from 'react-router';
import routes from './routes';

// Apply redux thunk middleware to enable async actions
 const createStoreWithMiddleware = applyMiddleware(reduxThunk)(createStore);
 const store = createStoreWithMiddleware(appStore);

render(
    <Provider store={store}>
        <Router history={browserHistory} routes={routes} />
    </Provider>,
    document.getElementById('root')
);