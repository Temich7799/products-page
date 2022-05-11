import './Header.scss';

function Header({ buttons, title }) {
    return (
        <header>
            <h1>{title}</h1>
            {buttons}
        </header>
    )
}

export default Header;
