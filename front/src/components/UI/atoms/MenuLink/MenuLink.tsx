import React from 'react';
import theme from './MenuLink.module.scss';

interface MenuLinkProps { 
    name: string
}

const MenuLink:React.FC<MenuLinkProps> = ({
     name
}) => {

    return (
        <div className={theme.menuLink}>
            {name.toUpperCase()}
        </div>
    )
}

export default MenuLink;