import { useNavigate } from 'react-router-dom';
import '../../../sass/HeaderButtons.scss';

function HeaderButtons() {
    const goBack = useNavigate();
    const handlerClick = () => goBack(-1);
    return (
        <div className='headerButtons'>
            <button type='submit' form='product_form'>Save</button>
            <button onClick={handlerClick}>Cancel</button>
        </div>
    )
}

export default HeaderButtons;