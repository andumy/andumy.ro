import React, { useState } from 'react';
import { useSelector } from 'react-redux';
import CategorySlider, {directionType} from './../../UI/molecules/CategorySlider/CategorySlider';
import theme from './Category.module.scss';
import { Category as CategoryType } from './../../../types/Category/Category';
import { AppState } from '../../../reducers';
import SideText from './../../UI/atoms/SideText/SideText';
import { currentPageType } from '../../../types/Utils/Utils';

const Category:React.FC = () => {
 
    const categories = useSelector<AppState,CategoryType[]>(state => state.categories)
    const [scrolls,setScrolls] = useState({
        leftScroll: directionType.none,
        rightScroll: directionType.none,
        leftToggleScroll: true,
        rightToggleScroll: true
    });

    const mirrorScroll = (slider:string,direction:directionType) => {
        switch(slider){
            case 'left':
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
            case 'right':
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
                    position={'left'}
                />
                <div className={theme.category__container__sliders}>
                    <CategorySlider
                        position={'left'}
                        offset={true}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.leftToggleScroll}
                        scrollDirection={scrolls.leftScroll}
                    />
                    <CategorySlider
                        position={'right'}
                        offset={false}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.rightToggleScroll}
                        scrollDirection={scrolls.rightScroll}
                    />
                </div>
                <SideText
                    word={'st/ud/io'}
                    goTo={currentPageType.studio}
                    position={'right'}
                />
            </div>
        </div>
    );

}

export default Category;