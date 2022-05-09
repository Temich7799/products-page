import saveProduct from '../../../../js/productAdd/productForm/saveProduct';
import PrimaryInputs from '../PrimaryInputs';
import TypeSelector from '../TypeSelector';
import './ProductForm.scss';

const ProductForm = ({ ...props }) => {
    return (
        <form onSubmit={(e) => { e.preventDefault(); saveProduct() }} {...props}>
            <PrimaryInputs className='primary_inputs' />
            <TypeSelector className='type_selector' />
        </form>
    )
}

export default ProductForm;