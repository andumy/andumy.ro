import React from 'react';
import { useSelector } from 'react-redux';
import { AppState } from '../../../reducers';
import { Category as CategoryType} from '../../../types/Category/Category';
import MenuLink from '../molecules/MenuLink/MenuLink';
import MenuBurger from '../molecules/MenuBurger/MenuBurger';

import theme from './Navbar.module.scss';

const Navbar = () => {
    
    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);


    return(
        <nav className={theme.navbar}>
            <MenuBurger 
                color={'normal'}
            />
        </nav>
    )
}

export default Navbar;