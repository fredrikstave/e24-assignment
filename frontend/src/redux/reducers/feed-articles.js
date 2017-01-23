import { ADD_FEED_ARTICLES } from '../actions/types';

// Define an empty initial state
const INTIAL_STATE = {};

export default function feedArticles(state = INTIAL_STATE, action) {
    switch(action.type) {
        case ADD_FEED_ARTICLES:
            return { ...state, data: action.payload };
        default:
            return state;
    }
}