import axios from 'axios';

function loadProducts(setProducts) {
    axios.post('https://productspage22.000webhostapp.com/php/scripts/productList/loadProducts.php', '')
        .then((response) => { setProducts(response.data) })
        .catch((error) => console.log(error));
}

export default loadProducts;