import { useEffect, useState } from 'react';
import getPrimaryInputs from '../../../services/productAdd/productForm/getPrimaryInputs';
import Input from './Input/Input';
import customValidity from '../../../services/productAdd/productForm/customValidity';

function PrimaryInputs(props) {
    const [primaryInputs, setPrimaryInputs] = useState([]);
    useEffect(() => getPrimaryInputs(setPrimaryInputs), []);
    
    return (
        <div {...props}>
            {primaryInputs.map((input) => {
                return <Input
                    placeholder={input.placeholder}
                    inputMode={input.mode}
                    minLength={input.min}
                    maxLength={input.max}
                    pattern={input.forValidate.pattern}
                    key={primaryInputs.indexOf(input)}
                    onInput={(e) => customValidity(e.target, input.forValidate.warningMessage)}>
                {input.name}</Input>
            })}
        </div>
    )
}

export default PrimaryInputs;