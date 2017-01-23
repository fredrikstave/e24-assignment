import { combineReducers } from 'redux';
import feedArticles from './feed-articles';
import varnishLogEntries from './log-entries';
import testDataItems from './test-data-items';

const appStore = combineReducers({
    feedArticles,
    varnishLogEntries,
    testDataItems
});

export default appStore;