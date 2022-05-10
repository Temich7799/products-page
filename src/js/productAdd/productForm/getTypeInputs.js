import axios from 'axios';

function getTypeInputs(setAttributes, selectedType = 'dvd') {
    let data = new FormData();
    data.append('type', selectedType);
    axios.post('https://productspage22.000webhostapp.com/php/scripts/productForm/inputs/typeInputs.php', data)
        .then((response) => setAttributes(response.data.attributes))
        .catch((error) => console.log(error));

}

export default getTypeInputs;