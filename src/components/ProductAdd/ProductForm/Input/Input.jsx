function Input({ children, ...props }) {
    const name = children.split(' ')[0].toLowerCase();
    return (
        <>
            <label htmlFor={name}>{children}</label>
            <input required id={name} name={name} autoComplete="off" type="text"{...props} />
        </>
    )
}

export default Input;