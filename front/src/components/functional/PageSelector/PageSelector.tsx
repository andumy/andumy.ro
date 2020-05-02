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
import _ from 'lodash';
const PageSelector:React.FC<any> = () =>{

    const utils = useSelector<AppState,UtilsType>(state => state.utils)
    const dispatch = useDispatch();
    const { currentPage, activeCategory } = {...utils};

    interface PageStateType {
        pages: currentPageType[],
        activePage: number,
        isScrollEnabled: boolean,
    }
    const [pageState,setPageState] = useState<PageStateType>({
        pages:[currentPageType.studio, currentPageType.home, currentPageType.category],
        activePage: 1,
        isScrollEnabled: true,
    });

    useEffect(() =>{
        if(currentPage === currentPageType.element){
            dispatch(getElements(activeCategory));
        }
        setTimeout(() => {
            setPageState({
                ...pageState,
                isScrollEnabled: true,
            })
        },1000)
    },[currentPage])

    useEffect(() =>{
        dispatch(setCurrentPage(pageState.pages[pageState.activePage]))
    },[pageState.activePage])

    const changePage = (e: React.WheelEvent<HTMLDivElement>)  => {
        //scroll up
        if(pageState.isScrollEnabled){
            if(e.deltaY < 0){
                setPageState({
                    ...pageState,
                    activePage: pageState.activePage + 1 > pageState.pages.length-1 ? 0 : pageState.activePage + 1,
                    isScrollEnabled: false,
                })
            }
            //scroll down
            else{
                setPageState({
                    ...pageState,
                    activePage: pageState.activePage - 1 < 0 ? pageState.pages.length-1 : pageState.activePage - 1,
                    isScrollEnabled: false,
                }) 
            }
        }
    }

    return (
        
        <div 
            className={theme.bg__normal}
            onWheel={(e: React.WheelEvent<HTMLDivElement>) => changePage(e)}
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