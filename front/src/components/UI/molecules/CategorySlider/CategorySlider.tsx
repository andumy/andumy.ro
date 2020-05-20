import React, { useState, useEffect, useRef } from 'react';
import { useSelector } from 'react-redux';
import { Category as CategoryType } from './../../../../types/Category/Category';
import { AppState } from '../../../../reducers';
import CategoryBox from './../../atoms/CategoryBox/CategoryBox';
import theme from './CategorySlider.module.scss';

export interface CategorySliderType {
    position: string,
    offset: boolean,
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
    onWheel,
    triggerScroll,
    scrollDirection
}) => {
    
    
    let storeCategories = useSelector<AppState,CategoryType[]>(state => state.categories);
    const [categories,setCategories] = useState([
        storeCategories[storeCategories.length - 2],
        storeCategories[storeCategories.length - 1],
        ...storeCategories, 
        storeCategories[0],
        storeCategories[1],
    ]);
    
    const [sliderPosition,setSliderPosition] = useState(2);
    const [pageScroll,setPageScroll] = useState<boolean>(true);
    const [boxsize,setBoxSize] = useState<number>(0.27*window.innerWidth < 250 ? 250+60 : 0.27*window.innerWidth + 60);

    const sliderUl = useRef<HTMLUListElement>(null);

    let sliderTransform = {
        transform: `translate3d(0px, -${offset ? (sliderPosition*boxsize-boxsize/2) : (sliderPosition*boxsize)}px, 0px)`
    }

    useEffect(() => {
        window.addEventListener('resize', handleResize)
    },[])

    useEffect(() => {

        sliderTransform = {
            transform: `translate3d(0px, -${offset ? (sliderPosition*boxsize-boxsize/2) : (sliderPosition*boxsize)}px, 0px)`
        };

    }, [sliderPosition,boxsize])

    useEffect(() => {
        scrollTo(scrollDirection);
    },[triggerScroll])

    const handleResize = () => {
        setBoxSize(0.27*window.innerWidth < 250 ? 250+60 : 0.27*window.innerWidth + 60);
    }
    //add or substract position inside slider
    const scrollTo = (direction:directionType) => {
        switch(direction){
            case directionType.down :
                if(sliderPosition >= categories.length - 2){
                    
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(0px, -${offset ? (2*boxsize-boxsize/2) : (2*boxsize)}px, 0px)`;

                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.5s ease-in-out';
                                setSliderPosition(3);
                            }
                        }, 100);
                    }
                }else{
                    setSliderPosition(sliderPosition+1);
                }
            break;
            case directionType.up :
                if(sliderPosition <= 1){
                    if(null !== sliderUl.current){
                        sliderUl.current.style.transition = 'none';
                        sliderUl.current.style.transform = `translate3d(0px, -${offset ? ((categories.length-3)*boxsize-boxsize/2) : ((categories.length-3)*boxsize)}px, 0px)`;
                        setTimeout(() => {
                            if(null !== sliderUl.current){
                                sliderUl.current.style.transition = 'all 0.5s ease-in-out';
                                setSliderPosition(categories.length-4);
                            }
                        }, 100);
                    }
                }else{
                    setSliderPosition(sliderPosition-1);
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