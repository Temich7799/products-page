import Header from '../main/Header/Header';
import HeaderButtons from './HeaderButtons/HeaderButtons';
import ProductForm from './ProductForm/ProductForm/ProductForm';

const ProductAdd = () => {
    return (
        <>
            <Header title="Add Product" buttons={<HeaderButtons />} />
            <main>
                <ProductForm id="product_form" className="product_form" />
            </main>
        </>
    )
}

export default ProductAdd;