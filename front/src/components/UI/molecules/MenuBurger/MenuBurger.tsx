import React from 'react';
import Fa from '../../atoms/fa/Fa';
import theme from './MenuBurger.module.scss'

interface MenuBurgerType {
    color: string,
}

const MenuBurger:React.FC<MenuBurgerType> = ({
    color='normal'
}) => {

    const style = color === 'normal' ? theme.burger_Normal : theme.burger_Inverse;

    return(
        <Fa
            type='fas'
            icon='bars'
            className={ style }
        />
    );

}

export default MenuBurger