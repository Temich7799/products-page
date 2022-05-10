import axios from 'axios';

function getPrimaryInputs(setPrimaryInputs) {
    axios.post('https://productspage22.000webhostapp.com/php/scripts/productForm/inputs/primaryInputs.php', '')
        .then((response) => setPrimaryInputs(response.data))
        .catch((error) => console.log(error));
}

export default getPrimaryInputs;