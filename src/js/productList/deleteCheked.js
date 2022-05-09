import axios from "axios";

function deleteChecked(loadProducts, setProducts) {
    let checked = [];
    for (let checkbox of document.body.getElementsByTagName('input')) {
        if (checkbox.checked) checked.push(checkbox.name);
    }
//adding the checked inputs to an array and then if true, make a query
    if (checked.length) {
        axios.post('http://localhost:8888/project/php/scripts/product_list/delete_products.php', checked)
            .then(function (response) {
                if (response.status === 200) { loadProducts(setProducts) }
                else console.log(response.data);
            })
            .catch(function (error) { console.log(error); });
    }
}

export default deleteChecked;
