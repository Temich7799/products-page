function Attributes(attributes) {
    const separator = " x ";
    return (
        <>{
            attributes.map((attribute) => {
                return (
                    <div id={`product${attribute[0].title}`} className="productListAttr" key={attributes.indexOf(attribute)}>
                        <p>{attribute[0].title}: </p>
                        <p> {Object.values(attribute[1]).join(separator)} {attribute[0].unit}</p>
                    </div>)
            })
        }</>
    )
}

export default Attributes;