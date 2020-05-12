import React, { CSSProperties } from 'react';
import theme from './SideText.module.scss';

interface SideTextType {
    word: string,
    position: "left" | "right"
}

const SideText:React.FC<SideTextType> = ({
    word,
    position,
}) =>{

    const wordArray = word.split('/');
    const textAlign = {
        textAlign: position
    };
    return (
        <div className={theme.sideText__container}>
            <div style={textAlign}>
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