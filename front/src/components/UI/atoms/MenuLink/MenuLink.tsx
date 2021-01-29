import React, { useState, useEffect } from 'react';
import theme from './MenuLink.module.scss';
import { useDispatch } from 'react-redux';
import classNames from 'classnames';
import { setActiveCategory, setCurrentPage } from '../../../../actions/utils.action';
import { currentPageType } from '../../../../types/Utils/Utils';
interface MenuLinkProps { 
    name: string,
    wait: number,
    pageId: number
}


const MenuLink:React.FC<MenuLinkProps> = ({
     name,
     wait=0,
     pageId
}) => {

    const [isLoading,setIsLoading] = useState(true);
    const dispatch = useDispatch();
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
        <div className={style} onClick={() => dispatch(setActiveCategory(pageId))}>
            {name.toUpperCase()}
        </div>
    )
}

export default MenuLink;