import axios from 'axios';

function getType(setAttributes, selectedType = 'dvd') {
    let data = new FormData();
    data.append('type', selectedType);
    axios.post('http://localhost:8888/project/php/scripts/product_add/product_form/select_type.php', data)
        .then((response) => setAttributes(response.data.attributes))
        .catch((error) => console.log(error));

}

export default getType;