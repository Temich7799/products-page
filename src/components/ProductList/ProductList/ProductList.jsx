import { useEffect, useState } from 'react';
import loadProducts from '../../../js/productList/loadProducts';
import Header from '../../main/Header/Header';
import HeaderButtons from '../HeaderButtons/HeaderButtons';
import Product from '../Product/Product';
import './ProductList.scss';

const ProductList = () => {
    const [products, setProducts] = useState([]);
    useEffect(() => loadProducts(setProducts), []);

    return (
        <>
            <Header title="Product List" buttons={HeaderButtons(loadProducts, setProducts)} />
            <main className="product_list">
                {products.map((product) => { return <Product product={product} key={product.ID} /> })}
            </main>
        </>
    )
}

export default ProductList;