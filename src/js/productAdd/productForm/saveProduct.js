import axios from "axios";

function saveProduct() {
    axios.post('http://localhost:8888/project/php/scripts/product_add/product_form/save_product.php', makeFormData())
        .then(function (response) {
            if (response.status === 200) document.location = '/';
            else console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

function makeFormData() {
    const data = new FormData();

    const primary_fields = document.querySelector('.primary_inputs').getElementsByTagName('input');
    for (let input of primary_fields) { data.append(input.name, input.value) }

    data.append('type', document.getElementById('productType').value);

    data.append('attributes', attributesToJSON());

    return data;
}

function attributesToJSON() {

    let result = [];

    for (let selector of document.querySelectorAll('.product_add_attr')) {
        let attributes = [];
        attributes.push(getDatasets(selector));
        attributes.push(getAttributes(selector));
        result.push(attributes);
    }

    function getDatasets(selector) {
        let result = {};
        for (let key in selector.dataset) { result[key] = selector.dataset[key] }
        return result;
    }

    function getAttributes(selector) {
        let result = {};
        for (let input of selector.getElementsByTagName('input')) { result[input.name] = input.value }
        return result;
    }

    return JSON.stringify(result);
}

export default saveProduct;