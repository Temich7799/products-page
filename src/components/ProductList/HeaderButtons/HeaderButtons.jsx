import deleteChecked from '../../../js/productList/deleteCheked';
import './HeaderButtons.scss';

const HeaderButtons = (loadProducts, setProducts) => {
    return (
        <div className="header_buttons">
            <a href="/add-product"><button>ADD</button></a>
            <button id="delete-product-btn" onClick={() => deleteChecked(loadProducts, setProducts)}>MASS DELETE</button>
        </div>

    )
}

export default HeaderButtons;