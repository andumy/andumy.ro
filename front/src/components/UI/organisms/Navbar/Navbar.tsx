import React from 'react';
import { useSelector } from 'react-redux';
import MenuBurger from '../../molecules/MenuBurger/MenuBurger';
import theme from './Navbar.module.scss';

const Navbar:React.FC<any> = () => {
    
    return(
        <nav id="burger" className={theme.navbar}>
            <MenuBurger/>
        </nav>
    )
}

export default Navbar;