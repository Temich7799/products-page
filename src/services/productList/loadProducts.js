import {BASE_URL, LOAD} from '../constants';
import axios from 'axios';

function loadProducts(setProducts) {
    axios.post(BASE_URL + LOAD, '')
        .then((response) => setProducts(response.data))
        .catch((error) => console.log(error));
}

export default loadProducts;