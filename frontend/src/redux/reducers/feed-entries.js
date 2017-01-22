const feedEntry = (state = {}, action) => {
    switch (action.type) {
        case 'ADD_FEED_ENTRY':
            return {
                id: action.id,
                text: action.text
            };
        case 'TOGGLE_FEED_ENTRY':
            if (state.id !== action.id) {
                return state;
            }

            return Object.assign({}, state, {
                toggled: !state.toggled
            });
        default:
            return state;
    }
}

const feedEntries = (state = [], action) => {
    switch (action.type) {
        case 'ADD_FEED_ENTRY':
            return [
                ...state,
                feedEntry(undefined, action)
            ];
        default:
            return state;
    }
}

export default feedEntries;