import React, { useEffect, useState, SyntheticEvent } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { AppState } from '../../../reducers';
import { Utils as UtilsType } from '../../../types/Utils/Utils';

import { getElements } from '../../../actions/element.actions';
import { setCurrentPage } from '../../../actions/utils.action';

import Elements from '../../templates/Elements/Elements';
import Category from '../../templates/Category/Category';
import Home from './../../pages/Home/Home';
import Studio from './../../pages/Studio/Studio';

import { currentPageType } from '../../../types/Utils/Utils';
import theme from './PageSelector.module.scss';

const PageSelector:React.FC<any> = () =>{

    const utils = useSelector<AppState,UtilsType>(state => state.utils)
    const dispatch = useDispatch();
    const { currentPage, activeCategory } = {...utils};
    const [pageScroll,setPageScroll] = useState<boolean>(true);

    useEffect(() =>{
        
        if(currentPage === currentPageType.element){
            dispatch(getElements(activeCategory));
        }
        setTimeout(() => {
            setPageScroll(true);
        },1000)

    },[currentPage])


    const changePage = (e: React.WheelEvent<HTMLDivElement>)  => {
        //scroll up
        if(pageScroll){
            if(e.deltaY < 0){
                switch (currentPage){
                    case currentPageType.home:
                        dispatch(setCurrentPage(currentPageType.category))
                        break;
                    case currentPageType.category:
                        dispatch(setCurrentPage(currentPageType.studio))
                        break;
                    case currentPageType.studio:
                        dispatch(setCurrentPage(currentPageType.home))
                        break;
                    default:
                        dispatch(setCurrentPage(currentPageType.home))
                        break;
                }
            }
            //scroll down
            else{
                switch (currentPage){
                    case currentPageType.home:
                        dispatch(setCurrentPage(currentPageType.studio))
                        break;
                    case currentPageType.category:
                        dispatch(setCurrentPage(currentPageType.home))
                        break;
                    case currentPageType.studio:
                        dispatch(setCurrentPage(currentPageType.category))
                        break;
                    default:
                        dispatch(setCurrentPage(currentPageType.home))
                        break;
                }
            }
            setPageScroll(false);
        }
    }

    return (
        
        <div 
            className={theme.bg__normal}
            onWheel={changePage}
        >
            {
                currentPage === currentPageType.home ? <Home /> :
                    (currentPage === currentPageType.studio ? <Studio /> :
                        (currentPage === currentPageType.category ? <Category /> :
                            (currentPage === currentPageType.element ? <Elements /> : null)))
            }
        </div>
    )
}

export default PageSelector;