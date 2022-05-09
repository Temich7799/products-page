import axios from 'axios';

function getPrimaryInputs(setPrimaryInputs) {
    axios.post('http://localhost:8888/project/php/scripts/product_add/product_form/get_primary_inputs.php', '')
        .then((response) => setPrimaryInputs(response.data))
        .catch((error) => console.log(error));
}

export default getPrimaryInputs;