import React, { useState, useEffect } from 'react';
import { useSelector } from 'react-redux';

import theme from './MenuOverlay.module.scss';
import { AppState } from '../../../../reducers';
import { Category as CategoryType } from './../../../../types/Category/Category';
import MenuLink from '../../atoms/MenuLink/MenuLink';
import  classNames  from 'classnames';


interface MenuOverlayType {
    startDisplay: boolean
}

const MenuOverlay:React.FC<MenuOverlayType> = ({
    startDisplay
}) => {

    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);
    const [isDisplayed,setIsDisplayed] = useState(false);

    useEffect(() => {
        if(startDisplay){
            setTimeout(() => {
                setIsDisplayed(true);
            },1300);
            
        }
        else{
            setIsDisplayed(false);
        }
    },[startDisplay]);


    const style = classNames({
        [theme.menu__overlay__generic] : true,
        [theme.menu__overlay__display] : startDisplay,
        [theme.menu__overlay__hidden] : !startDisplay,

    })
    
    const scrollHandler = (e: React.WheelEvent<HTMLDivElement>) =>{
        e.preventDefault();
        e.stopPropagation();
    }
    return(
        <div className={style} onWheel={scrollHandler}>
            {
                isDisplayed ?
                    categories.map((category, i) =>
                        <MenuLink
                            name={category.name}
                            key={category.name}
                            wait={i*100}
                            pageId={category.id}
                        />
                    )
                :
                    ''
            }
        </div>
    )
}

export default MenuOverlay;