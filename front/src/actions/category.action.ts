import { SET_CATEGORY } from "../constants/category.constants";
import { ThunkResult } from '../types/actions';
import { Category } from './../services/CRUD';

export const getCategory = ():ThunkResult<void> => {

    return (dispatch,getState) => {

        Category
        .get()
        .then(res => {
            dispatch({
                type: SET_CATEGORY,
                category: res.content
            });
        })
    }
}
