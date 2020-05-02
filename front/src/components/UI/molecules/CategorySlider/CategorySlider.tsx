import React from 'react';
import { useSelector } from 'react-redux';
import { Category as CategoryType } from './../../../../types/Category/Category';
import { AppState } from '../../../../reducers';
import CategoryBox from './../../atoms/CategoryBox/CategoryBox';
import theme from './CategorySlider.module.scss';

const CategorySlider:React.FC = () => {

    const categories = useSelector<AppState,CategoryType[]>(state => state.categories);

    return(
        <div className={theme.categorySlider__container}>
            {
                categories.map((category,i) => 
                    <CategoryBox
                        key={category.name}
                        name={category.name}
                    />
                )
            }
        </div>
    );
}

export default CategorySlider;