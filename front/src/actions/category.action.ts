import { Category as CategoryType} from "../types/Category/Category";
import { SET_CATEGORY } from "../constants/category.constants";
import { AppActions, ThunkResult } from '../types/actions';
import { Category } from './../services/CRUD';

export const setCategory = (category: CategoryType[]): AppActions => ({
    type: SET_CATEGORY,
    category
})

export const getCategory = ():ThunkResult<void> => {

    return (dispatch,getState) => {

        Category
        .get()
        .then(res => {
            console.log(res.content);
            dispatch(setCategory(res.content));
        })
    }
}