import React, {useState, useRef} from 'react';
import theme from './CategoryBox.module.scss';

interface CategoryBoxType {
    name:string
}

const CategoryBox:React.FC<CategoryBoxType> = ({
    name
}) => {

    const [isFullWord,setIsFullWord] = useState(false);
    const boxRef = useRef<HTMLDivElement>(null);
    const handleClick = (e:React.WheelEvent<HTMLDivElement>) => {
        console.log(boxRef.current?.offsetWidth,boxRef.current?.offsetHeight)
    }
    return(
        <div 
            className={theme.categoryBox__container} 
            onMouseEnter={() => setIsFullWord(true)}
            onMouseLeave={() => setIsFullWord(false)}
            onClick={handleClick}
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