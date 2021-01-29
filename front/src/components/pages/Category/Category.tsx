import React, { useState, useRef } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import CategorySlider, {directionType} from '../../UI/molecules/CategorySlider/CategorySlider';
import theme from './Category.module.scss';
import { Category as CategoryType } from '../../../types/Category/Category';
import { AppState } from '../../../reducers';
import SideText from '../../UI/atoms/SideText/SideText';
import { currentPageType } from '../../../types/Utils/Utils';
import { setCurrentPage } from '../../../actions/utils.action';
import { CategorySliderType } from './../../UI/molecules/CategorySlider/CategorySlider';

export enum sliderPosition {
    "left_up",
    "right_down",
}

export enum textPosition {
    "left",
    "right",
}


const Category:React.FC = () => {
 
    const categories = useSelector<AppState,CategoryType[]>(state => state.categories)
    const [scrolls,setScrolls] = useState({
        leftScroll: directionType.none,
        rightScroll: directionType.none,
        leftToggleScroll: true,
        rightToggleScroll: true
    });
    const dispatch = useDispatch();
    const sliderLeft = useRef<HTMLDivElement>(null);
    const sliderRight =  useRef<HTMLDivElement>(null);

    const clickHandler = (boxRef:React.RefObject<HTMLDivElement>,slider:sliderPosition) => {

        if(boxRef.current){
            switch(slider){
                case sliderPosition.left_up:
                    if(sliderLeft.current){
                        sliderLeft.current.classList.add(theme.category__upperSlider)
                    }
                    break;
                case sliderPosition.right_down:

                    break;
            }
            boxRef.current.classList.add(theme.category__elements_stage1);
            
            setTimeout(() => {
                if(boxRef.current){
                    boxRef.current.classList.add(theme.category__elements_stage2);
                }
            },200)

            setTimeout(() => {
                if(boxRef.current){
                    boxRef.current.classList.add(theme.category__elements_stage3);
                }
                dispatch(setCurrentPage(currentPageType.element));
            },1000)
        }
    }

    const mirrorScroll = (slider:sliderPosition,direction:directionType) => {
        switch(slider){
            case sliderPosition.left_up:
                if(direction == directionType.up){
                    setScrolls({
                        leftScroll: scrolls.leftScroll,
                        rightScroll: directionType.down,
                        leftToggleScroll: scrolls.leftToggleScroll,
                        rightToggleScroll: !scrolls.rightToggleScroll,
                    })
                }else{
                    setScrolls({
                        leftScroll: scrolls.leftScroll,
                        rightScroll: directionType.up,
                        leftToggleScroll: scrolls.leftToggleScroll,
                        rightToggleScroll: !scrolls.rightToggleScroll,
                    })
                }
                break;
            case sliderPosition.right_down:
                if(direction == directionType.up){
                    setScrolls({
                        leftScroll: directionType.down,
                        rightScroll: scrolls.rightScroll,
                        leftToggleScroll: !scrolls.leftToggleScroll,
                        rightToggleScroll: scrolls.rightToggleScroll,
                    })
                }else{
                    setScrolls({
                        leftScroll: directionType.up,
                        rightScroll: scrolls.rightScroll,
                        leftToggleScroll: !scrolls.leftToggleScroll,
                        rightToggleScroll: scrolls.rightToggleScroll,
                    })
                }
                break;
        }

    }

    return(
        <div>
            <div className={theme.category__container}>
                <SideText
                    word={'ho/me'}
                    goTo={currentPageType.home}
                    position={textPosition.left}
                />
                <div className={theme.category__container__sliders}>
                    <CategorySlider
                        position={sliderPosition.left_up}
                        offset={true}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.leftToggleScroll}
                        scrollDirection={scrolls.leftScroll}
                        clickHandler={clickHandler}
                        ref={sliderLeft}
                    />
                    <CategorySlider
                        position={sliderPosition.right_down}
                        offset={false}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.rightToggleScroll}
                        scrollDirection={scrolls.rightScroll}
                        clickHandler={clickHandler}
                        ref={sliderRight}
                    />
                </div>
                <SideText
                    word={'st/ud/io'}
                    goTo={currentPageType.studio}
                    position={textPosition.right}
                />
            </div>
        </div>
    );

}

export default Category;