import { BASE_URL, DELETE } from '../constants';
import axios from 'axios';

function deleteChecked(loadProducts, setProducts) {
    const checked = [];
    for (let checkbox of document.body.getElementsByTagName('input')) {
        if (checkbox.checked) { checked.push(checkbox.name); }
    }
    //adding the checked inputs to an array and then if true, make a query
    if (checked.length) {
        axios.post(BASE_URL + DELETE, checked)
            .then((response) => {
                if (response.status === 200) { loadProducts(setProducts); }
                else { console.log(response.data); }
            })
            .catch((error) => console.log(error));
    }
}

export default deleteChecked;
