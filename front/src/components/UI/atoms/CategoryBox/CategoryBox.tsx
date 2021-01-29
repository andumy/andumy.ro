import React, {useState, useRef} from 'react';
import theme from './CategoryBox.module.scss';
import { useDispatch } from 'react-redux';
import { setCurrentPage } from '../../../../actions/utils.action';
import { currentPageType } from '../../../../types/Utils/Utils';
import { sliderPosition } from '../../../pages/Category/Category';


interface CategoryBoxType {
    name:string,
    clickHandler: (boxRef:React.RefObject<HTMLDivElement>,slider:sliderPosition) => void,
    position:sliderPosition
}

const CategoryBox:React.FC<CategoryBoxType> = ({
    name,
    clickHandler,
    position
}) => {

    const dispatch = useDispatch();
    const [isFullWord,setIsFullWord] = useState(false);
    const boxRef = useRef<HTMLDivElement>(null);

    return(
        <div 
            className={theme.categoryBox__container} 
            onMouseEnter={() => setIsFullWord(true)}
            onMouseLeave={() => setIsFullWord(false)}
            onClick={() => clickHandler(boxRef,position)}
            ref={boxRef}
        >
            <p>
                {
                    isFullWord ? name.toUpperCase() : name.toUpperCase().charAt(0)
                }
            </p>
        </div>
    );
}


export default CategoryBox;