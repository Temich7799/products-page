import saveProduct from '../../../../services/productAdd/productForm/saveProduct';
import PrimaryInputs from '../PrimaryInputs';
import TypeSelector from '../TypeSelector';
import './ProductForm.scss';

function ProductForm(props) {
    const sumbit = (e) => { e.preventDefault(); saveProduct() };
    return (
        <form onSubmit={sumbit} {...props}>
            <PrimaryInputs className='primaryInputs' />
            <TypeSelector className='typeSelector' />
        </form>
    )
}

export default ProductForm;