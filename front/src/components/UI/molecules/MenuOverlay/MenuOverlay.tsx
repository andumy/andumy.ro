import React from 'react';
import { useDispatch, useSelector } from 'react-redux';

import theme from './MenuOverlay.module.scss';
import { AppState } from '../../../../reducers';
import { Category as CategoryType } from './../../../../types/Category/Category';
import MenuLink from '../../atoms/MenuLink/MenuLink';

interface MenuOverlayType {
    isShowned: boolean
}

const MenuOverlay:React.FC<MenuOverlayType> = ({
    isShowned
}) => {

    const dispatch = useDispatch();
    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);
    const style = isShowned ? theme.menu__overlay__container : theme.menu__overlay__hidden;

    return(
        <div className={style}>
            {
                categories.map((category, i) => 
                    <MenuLink
                        name={category.name}
                        key={category.name}
                    />
                )
            }
        </div>
    )
}

export default MenuOverlay;