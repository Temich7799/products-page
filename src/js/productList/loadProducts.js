import axios from 'axios';

function loadProducts(setProducts) {
    axios.post('http://localhost:8888/project/php/scripts/product_list/load_products.php', '')
        .then((response) => { setProducts(response.data) })
        .catch((error) => console.log(error));
}

export default loadProducts;