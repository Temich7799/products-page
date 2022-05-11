import { BASE_URL, OPTIONS } from '../../constants';
import axios from 'axios';

function getOptions(setOptions) {
    axios.post(BASE_URL + OPTIONS, '')
        .then((response) => setOptions(response.data))
        .catch((error) => console.log(error));

}

export default getOptions;