import React from 'react';
import { useDispatch } from 'react-redux';
import theme from './SideText.module.scss';
import { currentPageType } from '../../../../types/Utils/Utils';
import { setCurrentPage } from '../../../../actions/utils.action';
import { textPosition } from '../../../pages/Category/Category';

interface SideTextType {
    word: string,
    position: textPosition,
    goTo: currentPageType,
    margin?: number
}

enum textAlignDirection {
    "left" = "left",
    "right" = "right",
}

const SideText:React.FC<SideTextType> = ({
    word,
    position,
    goTo,
    margin=100,
}) => {

    const dispatch = useDispatch();
    const wordArray = word.split('/');
    const textAlign = {
        textAlign: position === textPosition.left ? textAlignDirection.left : textAlignDirection.right ,
        margin: `0px ${position === textPosition.right ? margin : '0' }px 0px ${position === textPosition.left ? margin : '0' }px`
    };

    const clickHandler = () => {
        dispatch(setCurrentPage(goTo));
    }
    return (
        <div className={theme.sideText__container}>
            <div style={textAlign}
                onClick={clickHandler}
            >
                {
                    wordArray.map((letter,i)=>{
                        return<p>{letter.toUpperCase()}</p>
                    })
                }
            </div>
        </div>
    )
}

export default SideText