const Attributes = ({ title, unit, description, children }) => {
    return (
        <>
            <div className="product_add_attr" data-title={title} data-unit={unit}>
                {children}
                <p><em>{description}</em></p>
            </div>
        </>
    )
}

export default Attributes;