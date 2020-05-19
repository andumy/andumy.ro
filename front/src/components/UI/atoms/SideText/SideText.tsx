import React, { CSSProperties } from 'react';
import { useDispatch } from 'react-redux';
import theme from './SideText.module.scss';
import { currentPageType } from '../../../../types/Utils/Utils';
import { setCurrentPage } from '../../../../actions/utils.action';

interface SideTextType {
    word: string,
    position: "left" | "right",
    goTo: currentPageType,
    margin?: number
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
        textAlign: position,
        margin: `0px ${position === 'right' ? margin : '0' }px 0px ${position === 'left' ? margin : '0' }px`
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