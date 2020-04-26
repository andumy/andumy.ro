import React from 'react';
import { useDispatch, useSelector } from 'react-redux';

import theme from './MenuOverlay.module.scss';
import { AppState } from '../../../../reducers';
import { Category as CategoryType } from './../../../../types/Category/Category';
import MenuLink from '../../atoms/MenuLink/MenuLink';
import  classNames  from 'classnames';


interface MenuOverlayType {
    isShowned: boolean
}

const MenuOverlay:React.FC<MenuOverlayType> = ({
    isShowned
}) => {

    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);
    
    const style = classNames({
        [theme.menu__overlay__generic]: true,
        [theme.menu__overlay__container] : isShowned,
        [theme.menu__overlay__hidden] : !isShowned,

    })
    return(
        <div className={style}>
            {
                categories.map((category, i) =>
                    <MenuLink
                        name={category.name}
                        key={category.name}
                        wait={i*100}
                    />
                )
            }
        </div>
    )
}

export default MenuOverlay;