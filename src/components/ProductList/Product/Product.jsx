import Attributes from '../Attributes';
import './Product.scss';

const Product = ({ product, ...props }) => {
    return (
        <div className="product_thumb" id={product.ID} {...props}>
            <div><input type="checkbox" name={product.ID} className="delete-checkbox" /></div>
            <div className="product_caption">
                <p>{product.SKU}</p>
                <p>{product.NAME}</p>
                <p>{product.TYPE}</p>
                <p>{product.PRICE}$</p>
                {Attributes(product.ATTRIBUTES)}
            </div>
        </div>
    )
}

export default Product;