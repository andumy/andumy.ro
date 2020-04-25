import React from 'react';
import * as action from './../../../actions/category.action';
import { useDispatch,useSelector } from 'react-redux';
import { AppState } from '../../../reducers';
import { Category as CategoryType } from '../../../types/Category/Category';
import Navbar from '../../UI/organisms/Navbar';
const Category = () => {
    
    const dispatch = useDispatch();
    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);

    return(
        <div>
            <Navbar/>
            {
                categories.map((item, key) =>
                    <div>
                        <div>
                                {item.name}
                            </div>
                            <p>
                                {item.cta}
                            </p>
                            <img src={item.image} alt=""/>
                    </div>
                )
            }
            <div onClick={()=> dispatch(action.getCategory())}>getCategories</div>
        </div>
    );

}

export default Category;