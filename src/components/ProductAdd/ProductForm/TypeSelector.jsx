import { useEffect, useState } from 'react';
import Attributes from './Attributes/Attributes';
import Input from './Input/Input';
import customValidity from '../../../services/productAdd/productForm/customValidity';
import getTypeInputs from '../../../services/productAdd/productForm/getTypeInputs';
//import getOptions from '../../../services/productAdd/productForm/getOptions';

function TypeSelector(props) {
    /*  //Block for loading option values from server, but its bad for QA
    const [options, setOptions] = useState([]);
    const [attributes, setAttributes] = useState([]);
   
    useEffect(() => getOptions(setOptions), []);
    useEffect(() => getTypeInputs(setAttributes, options[0]), [options]);
    */

    const [attributes, setAttributes] = useState([]);
    useEffect(() => getTypeInputs(setAttributes), []);

    return (
        <div {...props}>
            <label htmlFor='productType'>Type Switcher</label>
            <select id='productType' onChange={(e) => getTypeInputs(setAttributes, e.target.value)}>
                {/*options.map((option) => { return <option key={options.indexOf(option)}>{option}</option> })*/}
                <option>DVD</option>
                <option>Book</option>
                <option>Furniture</option>
            </select>

            {attributes.map((attribute) => {
                return (
                    <Attributes
                        title={attribute.title} description={attribute.description}
                        unit={attribute.unit} key={attributes.indexOf(attribute)}>
                        {attribute.inputs.map((input) => {
                            return (
                                <Input
                                    placeholder={input.placeholder} inputMode={input.mode}
                                    minLength={input.min} maxLength={input.max}
                                    pattern={input.forValidate.pattern}
                                    key={attribute.inputs.indexOf(input)}
                                    onInput={(e) => customValidity(e.target, input.forValidate.warningMessage)}>
                                    {input.name}
                                </Input>
                            )
                        })}
                    </Attributes>
                )
            })}
        </div>
    )
}

export default TypeSelector;