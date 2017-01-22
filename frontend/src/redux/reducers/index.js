import { combineReducers } from 'redux';
import articles from './articles';
import logEntries from './log-entries';
import feedEntries from './feed-entries';

const appStore = combineReducers({
    articles,
    logEntries,
    feedEntries
});

export default appStore;