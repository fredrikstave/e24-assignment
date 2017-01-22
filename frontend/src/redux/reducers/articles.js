const article = (state = {}, action) => {
    switch (action.type) {
        case 'ADD_ARTICLE':
            return {
                id: action.id,
                text: action.text
            };
        default:
            return state;
    }
}

const articles = (state = [], action) => {
    switch (action.type) {
        case 'ADD_ARTICLE':
            return [
                ...state,
                article(undefined, action)
            ];
        default:
            return state;
    }
}

export default articles;