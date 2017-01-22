import fetch from 'isomorphic-fetch';
import { BASE_URL } from '../../env';

export function fetchVarnish() {
    let endpoint = `${BASE_URL}/varnish-log`;
    
    fetch(endpoint)
    .then((response) => response.json())
    .then((json) => {
        console.log(json);
    })
    .catch((error) => {
        console.log('error');
    });
}