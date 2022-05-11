import deleteChecked from '../../../services/productList/deleteCheked';
import '../../../sass/HeaderButtons.scss';

function HeaderButtons(loadProducts, setProducts) {
    const handlerClick = () => deleteChecked(loadProducts, setProducts);
    return (
        <div className="headerButtons">
            <a href="/add-product"><button>ADD</button></a>
            <button id="delete-product-btn" onClick={handlerClick}>MASS DELETE</button>
        </div>
    )
}

export default HeaderButtons;