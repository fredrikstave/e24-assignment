import { ADD_VARNISH_LOG_ENTRIES } from '../actions/types';

// Define an empty initial state
const INTIAL_STATE = {};

export default function varnishLogEntries(state = INTIAL_STATE, action) {
    switch(action.type) {
        case ADD_VARNISH_LOG_ENTRIES:
            return { ...state, data: action.payload };
        default:
            return state;
    }
}