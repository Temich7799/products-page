import { useNavigate } from 'react-router-dom';
import './HeaderButtons.scss';

const HeaderButtons = () => {
    const goBack = useNavigate();
    return (
        <div className="header_buttons">
            <button type="submit" form="product_form">Save</button>
            <button onClick={() => goBack(-1)} >Cancel</button>
        </div>

    )
}

export default HeaderButtons;