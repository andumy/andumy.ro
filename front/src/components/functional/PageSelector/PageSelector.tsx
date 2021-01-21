import React, { useEffect, useState, useRef } from 'react';
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
import Navbar from './../../UI/organisms/Navbar/Navbar';
import { directionType } from '../../UI/molecules/CategorySlider/CategorySlider';

const PageSelector:React.FC<any> = () =>{

    const dispatch = useDispatch();
    const utils = useSelector<AppState,UtilsType>(state => state.utils)
    
    const { currentPage, activeCategory } = {...utils};

    const [pageScroll,setPageScroll] = useState<boolean>(true);
    const [sliderPosition,setSliderPosition] = useState(0);
    const [prevPage,setPrevPage] = useState(0);
    const sliderUl = useRef<HTMLUListElement>(null);

    let sliderTransform = {
        transform: `translate3d(${(sliderPosition*100)}vw, 0px, 0px)`
    }

    
    useEffect(() => {

        sliderTransform = {
            transform: `translate3d(${(sliderPosition*100)}vw, 0px, 0px)`
        };

    }, [sliderPosition])

    useEffect(() =>{
        
        if(currentPage === currentPageType.element){
            dispatch(getElements(activeCategory));
        }
        setTimeout(() => {
            setPageScroll(true);
        },1000)

        switch (prevPage){
            case currentPageType.home:
                if(currentPage === currentPageType.studio){
                    scrollTo(directionType.down);
                } else if(currentPage === currentPageType.category){
                    scrollTo(directionType.up);
                }
                break;

            case currentPageType.category:
                if(currentPage === currentPageType.home){
                    scrollTo(directionType.down);
                } else if(currentPage === currentPageType.studio){
                    scrollTo(directionType.up);
                }
                break;

            case currentPageType.studio:
                if(currentPage === currentPageType.category){
                    scrollTo(directionType.down);
                } else if(currentPage === currentPageType.home){
                    scrollTo(directionType.up);
                }
                break;

            default:
                break;
        }

        setPrevPage(currentPage);

    },[currentPage])

    //add or substract position inside slider
    const scrollTo = (direction:directionType) => {
        switch(direction){
            case directionType.down :
                if(sliderPosition >= 2){
                    
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(-100vw, 0px, 0px)`;

                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.7s ease-in-out';
                                setSliderPosition(0);
                            }
                        }, 500);
                    }
                }else{
                    setSliderPosition(sliderPosition+1);
                }
            break;
            case directionType.up :
                if(sliderPosition <= -2){
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(100vw, 0px, 0px)`;
                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.7s ease-in-out';
                                setSliderPosition(0);
                            }
                        }, 500);
                    }
                }else{
                    setSliderPosition(sliderPosition-1);
                }
            break;
        }
        
        setTimeout(() => {
            setPageScroll(true);
        },1000)
    }

    const scrollHandler = (e:React.WheelEvent<HTMLUListElement>) => {
        e.stopPropagation();
        if(pageScroll){
            if(e.deltaY < 0){
                // scrollTo(directionType.up);
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
                // scrollTo(directionType.down);
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
        >
            <Navbar/>   
            <div className={theme.pageSelector__container}>
                <ul 
                    className={theme.pageSelector__list}
                    style={sliderTransform}
                    onWheel={scrollHandler}
                    ref={sliderUl}
                >
                    <li className={theme.pageSelector__frame}>
                        <Category />
                    </li>
                    <li className={theme.pageSelector__frame}>
                        <Studio />
                    </li>
                    <li className={theme.pageSelector__frame}>
                        <Home />
                    </li>
                    <li className={theme.pageSelector__frame}>
                        <Category />
                    </li>
                    <li className={theme.pageSelector__frame}>
                        <Studio />
                    </li>
                </ul> 
            </div>
        </div>
    )
}

export default PageSelector;