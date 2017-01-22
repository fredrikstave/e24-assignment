let nextArticleId = 0;
let nextLogEntryId = 0;
let nextFeedEntryId = 0;

export const addArticle = (article) => {
    return {
        type: 'ADD_ARTICLE',
        id: nextArticleId++,
        article
    }
}

export const fetchArticles = (articles) => {
    return {
        type: 'FETCH_ARTICLES',
        id: nextArticleId++,
        articles
    };
}

export const addLogEntry = (text) => {
    return {
        type: 'ADD_LOG_ENTRY',
        id: nextLogEntryId++,
        text
    }
}

export const toggleLogEntry = (id) => {
    return {
        type: 'TOGGLE_LOG_ENTRY',
        id
    }
}

export const addFeedEntry = (text) => {
    return {
        type: 'ADD_FEED_ENTRY',
        id: nextFeedEntryId++,
        text
    }
}