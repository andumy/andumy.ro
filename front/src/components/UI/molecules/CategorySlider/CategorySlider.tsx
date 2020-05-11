import React, { useState, useEffect, useRef } from 'react';
import { useSelector } from 'react-redux';
import { Category as CategoryType } from './../../../../types/Category/Category';
import { AppState } from '../../../../reducers';
import CategoryBox from './../../atoms/CategoryBox/CategoryBox';
import theme from './CategorySlider.module.scss';

export interface CategorySliderType {
    position: string,
    offset: number,
    boxsize?: number,
    onWheel: (slider:string,direction:directionType) => void,
    triggerScroll: boolean,
    scrollDirection: directionType
}

export enum directionType {
    "up",
    "down",
    "none"
}

const CategorySlider:React.FC<CategorySliderType> = ({
    position,
    offset,
    boxsize = 580,
    onWheel,
    triggerScroll,
    scrollDirection
}) => {
    
    const [sliderPosition,setSliderPosition] = useState(-2*boxsize);
    let storeCategories = useSelector<AppState,CategoryType[]>(state => state.categories);
    const [categories,setCategories] = useState([
        storeCategories[storeCategories.length - 1],
        storeCategories[storeCategories.length - 2],
        ...storeCategories, 
        storeCategories[0],
        storeCategories[1],
    ]);
    const [pageScroll,setPageScroll] = useState<boolean>(true);

    const sliderUl = useRef<HTMLUListElement>(null);

    let sliderTransform = {
        transform: `translate3d(0px, ${sliderPosition+offset}px, 0px)`
    }

    useEffect(() => {
        sliderTransform = {
            transform: `translate3d(0px, ${sliderPosition+offset}px, 0px)`
        };
    }, [sliderPosition])

    useEffect(() => {
        scrollTo(scrollDirection);
    },[triggerScroll])

    //add or substract position inside slider
    const scrollTo = (direction:directionType) => {
        switch(direction){
            case directionType.up :
                if(sliderPosition >= -boxsize){
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(0px, ${(categories.length-4)*(-boxsize)+offset}px, 0px)`;

                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.5s ease-in-out';
                                setSliderPosition((categories.length-5)*(-boxsize));
                            }
                        }, 0);
                    }
                }else{
                    setSliderPosition(sliderPosition+boxsize);
                }
            break;
            case directionType.down :
                if(sliderPosition <= (categories.length-2)*(-boxsize)){
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(0px, ${2*(-boxsize)+offset}px, 0px)`;
                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.5s ease-in-out';
                                setSliderPosition(3*(-boxsize));
                            }
                        }, 0);
                    }
                }else{
                    setSliderPosition(sliderPosition-boxsize);
                }
            break;
        }
        
        setTimeout(() => {
            setPageScroll(true);
        },500)
    }

    const scrollHandler = (e:React.WheelEvent<HTMLUListElement>) => {
        e.stopPropagation();
        if(pageScroll){
            if(e.deltaY < 0){
                scrollTo(directionType.up);
                onWheel(position,directionType.up);
                
            }else{
                scrollTo(directionType.down);
                onWheel(position,directionType.down);
            }   
            setPageScroll(false);
        }

    }

    return( 
        <div className={theme.categorySlider__container}>
            <ul 
                style={sliderTransform}
                className={theme.categorySlider__list}
                onWheel={scrollHandler}
                ref={sliderUl}
            >
                {
                    
                    categories.map((category,i) => 
                        <li className={theme.categorySlider__frame}>
                            <CategoryBox
                                key={position+category.name}
                                name={category.name}
                            />
                        </li>
                    )
                }
            </ul>
        </div>
    );
}

export default CategorySlider;