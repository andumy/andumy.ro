import React, { useState } from 'react';
import { useSelector } from 'react-redux';
import Navbar from '../../UI/organisms/Navbar/Navbar';
import CategorySlider, {directionType} from './../../UI/molecules/CategorySlider/CategorySlider';
import theme from './Category.module.scss';
import { Category as CategoryType } from './../../../types/Category/Category';
import { AppState } from '../../../reducers';
import SideText from './../../UI/atoms/SideText/SideText';


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
            <Navbar/>
            <div className={theme.category__content}>
                <SideText
                    word={'st/ud/io'}
                    position={'left'}
                />
                <div className={theme.category__content__sliders}>
                    <CategorySlider
                        position={'left'}
                        offset={180}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.leftToggleScroll}
                        scrollDirection={scrolls.leftScroll}
                    />
                    <CategorySlider
                        position={'right'}
                        offset={290+180}
                        onWheel={mirrorScroll}
                        triggerScroll={scrolls.rightToggleScroll}
                        scrollDirection={scrolls.rightScroll}
                    />
                </div>
                <SideText
                    word={'se/rv/ic/es'}
                    position={'right'}
                />
            </div>
        </div>
    );

}

export default Category;