import React, { useState, useEffect } from 'react';
import theme from './MenuLink.module.scss';
import classNames from 'classnames';

interface MenuLinkProps { 
    name: string,
    wait: number
}

const MenuLink:React.FC<MenuLinkProps> = ({
     name,
     wait=0
}) => {

    const [isLoading,setIsLoading] = useState(true);
    useEffect(() => {

        setTimeout(() => {
            setIsLoading(false);
        }, wait);

    }, [isLoading])

    const style = classNames({

        [theme.menuLink__generic] : true,
        [theme.menuLink__hidden] : isLoading,
        [theme.menuLink__display] : !isLoading,

    })

    return (
        <div className={style}>
            {name.toUpperCase()}
        </div>
    )
}

export default MenuLink;