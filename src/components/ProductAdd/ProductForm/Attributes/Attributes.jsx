function Attributes({ title, unit, description, children }) {
    return (
        <div className="productAddAttr" data-title={title} data-unit={unit}>
            {children}
            <p><em>{description}</em></p>
        </div>
    )
}

export default Attributes;