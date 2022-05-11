import { BASE_URL, SAVE } from '../../constants';
import axios from 'axios';

function saveProduct() {
    axios.post(BASE_URL + SAVE, makeFormData())
        .then((response) => {
            if (response.status === 200) { document.location = '/'; }
            else { console.log(response.data); }
        })
        .catch((error) => {
            console.log(error);
        });
}

function makeFormData() {
    const data = new FormData();

    const primaryInputs = document.querySelector('.primaryInputs').getElementsByTagName('input');
    for (let input of primaryInputs) { data.append(input.name, input.value); }

    data.append('type', document.getElementById('productType').value);

    data.append('attributes', attributesToJSON());

    return data;
}

function attributesToJSON() {

    const result = [];

    for (let selector of document.querySelectorAll('.productAddAttr')) {
        let attributes = [];
        attributes.push(getDatasets(selector));
        attributes.push(getAttributes(selector));
        result.push(attributes);
    }

    function getDatasets(selector) {
        const result = {};
        for (let key in selector.dataset) { result[key] = selector.dataset[key]; }
        return result;
    }

    function getAttributes(selector) {
        const result = {};
        for (let input of selector.getElementsByTagName('input')) { result[input.name] = input.value; }
        return result;
    }

    return JSON.stringify(result);
}

export default saveProduct;