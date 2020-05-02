import React, {useState} from 'react';
import theme from './CategoryBox.module.scss';

interface CategoryBoxType {
    name:string
}

const CategoryBox:React.FC<CategoryBoxType> = ({
    name
}) => {

    const [isFullWord,setIsFullWord] = useState(false);
    return(
        <div 
            className={theme.categoryBox__container} 
            onMouseEnter={() => setIsFullWord(true)}
            onMouseLeave={() => setIsFullWord(false)}
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