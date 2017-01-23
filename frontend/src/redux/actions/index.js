import fetch from 'isomorphic-fetch';
import { BACKEND_URL } from '../../env';
import { 
    ADD_FEED_ARTICLES, 
    ADD_TEST_DATA_ITEMS, 
    ADD_VARNISH_LOG_ENTRIES 
} from './types';

export function addFeedArticlesAction() {
    return function(dispatch) {
        fetch(`${BACKEND_URL}/feed`)
            .then(response => response.json())
            .then((json) => {
                dispatch({
                    type: ADD_FEED_ARTICLES,
                    payload: json
                });
            })
            .catch((error) => {
                console.log(error);
            });
    }
}

export function addVarnishLogEntriesAction() {
    return function(dispatch) {
        fetch(`${BACKEND_URL}/varnish-log`)
            .then(response => response.json())
            .then((json) => {
                dispatch({
                    type: ADD_VARNISH_LOG_ENTRIES,
                    payload: json
                });
            })
            .catch((error) => {
                console.log(error);
            });
    }
}

export function addTestDataItemsAction() {
    return function(dispatch) {
        fetch(`${BACKEND_URL}/test-data`)
            .then(response => response.json())
            .then((json) => {
                dispatch({
                    type: ADD_TEST_DATA_ITEMS,
                    payload: json
                });
            })
            .catch((error) => {
                console.log(error);
            });
    }
}