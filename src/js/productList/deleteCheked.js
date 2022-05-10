import axios from "axios";

function deleteChecked(loadProducts, setProducts) {
    let checked = [];
    for (let checkbox of document.body.getElementsByTagName('input')) {
        if (checkbox.checked) checked.push(checkbox.name);
    }
//adding the checked inputs to an array and then if true, make a query
    if (checked.length) {
        axios.post('https://productspage22.000webhostapp.com/php/scripts/productList/deleteProducts.php', checked)
            .then(function (response) {
                if (response.status === 200) { loadProducts(setProducts) }
                else console.log(response.data);
            })
            .catch(function (error) { console.log(error); });
    }
}

export default deleteChecked;
