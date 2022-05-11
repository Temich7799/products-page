import { BASE_URL, PRIMARY } from '../../constants';
import axios from 'axios';

function getPrimaryInputs(setPrimaryInputs) {
    axios.post(BASE_URL + PRIMARY, '')
        .then((response) => setPrimaryInputs(response.data))
        .catch((error) => console.log(error));
}

export default getPrimaryInputs;