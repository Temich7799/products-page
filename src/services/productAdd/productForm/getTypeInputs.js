import { BASE_URL, TYPE } from '../../constants';
import axios from 'axios';

function getTypeInputs(setAttributes, selectedType = 'dvd') {
    const data = new FormData();
    data.append('type', selectedType);
    axios.post(BASE_URL + TYPE, data)
        .then((response) => setAttributes(response.data.attributes))
        .catch((error) => console.log(error));

}

export default getTypeInputs;