const logEntry = (state = {}, action) => {
    switch (action.type) {
        case 'ADD_LOG_ENTRY':
            return {
                id: action.id,
                text: action.text
            };
        case 'TOGGLE_LOG_ENTRY':
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

const logEntries = (state = [], action) => {
    switch (action.type) {
        case 'ADD_LOG_ENTRY':
            return [
                ...state,
                logEntry(undefined, action)
            ];
        case 'TOGGLE_LOG_ENTRY':
            return state.map(entry => logEntry(entry, action));
        default:
            return state;
    }
}

export default logEntries;