import { ADD_TEST_DATA_ITEMS } from '../actions/types';

// Define an empty initial state
const INTIAL_STATE = {};

export default function testDataItems(state = INTIAL_STATE, action) {
    switch(action.type) {
        case ADD_TEST_DATA_ITEMS:
            return { ...state, data: action.payload };
        default:
            return state;
    }
}