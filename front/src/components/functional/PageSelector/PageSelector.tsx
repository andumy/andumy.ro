import React, { useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { AppState } from '../../../reducers';

import { Utils as UtilsType } from '../../../types/Utils/Utils';
import { getElements } from '../../../actions/element.actions';

import Elements from '../../templates/Elements/Elements';
import Category from '../../templates/Category/Category';
import Home from './../../pages/Home/Home';
import Studio from './../../pages/Studio/Studio';

import { currentPageType } from '../../../types/Utils/Utils';

const PageSelector:React.FC<any> = () =>{

    const utils = useSelector<AppState,UtilsType>(state => state.utils)
    const dispatch = useDispatch();
    const { currentPage, activeCategory } = {...utils};

    useEffect(() =>{
        if(currentPage == currentPageType.element){
            dispatch(getElements(activeCategory));
        }
    },[currentPage])

    return (
        
        currentPage == currentPageType.home ? <Home /> :
            (currentPage == currentPageType.studio ? <Studio /> :
                (currentPage == currentPageType.category ? <Category /> :
                    (currentPage == currentPageType.element ? <Elements /> : null)))
    )
}

export default PageSelector;