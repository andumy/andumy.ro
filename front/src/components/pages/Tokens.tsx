import React from 'react';

import { AppState } from "../../reducers";
import { Category as CategoryType} from '../../types/Category/Category';
import { useDispatch,useSelector } from 'react-redux';

// import MenuLink from '../UI/atoms/MenuLink/MenuLink';
import MenuBurger from './../UI/molecules/MenuBurger/MenuBurger';

const Tokens = () => {
    const dispatch = useDispatch();
    const categories = useSelector<AppState, CategoryType[]>(state => state.categories);

    return(
        <div>
        </div>
    )

}

export default Tokens