function customValidity(elem, message) {
    elem.setCustomValidity('');
    elem.classList.remove('invalid');

    if (elem.validity.patternMismatch) {
        elem.setCustomValidity(message);
        elem.classList.add('invalid');
    }
}

export default customValidity;