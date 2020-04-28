import { SET_ELEMENT } from "../constants/element.constants";
import { ThunkResult } from '../types/actions';
import { Elements } from "../services/CRUD";


export const getElements = (categoryId:number):ThunkResult<void> => {

    return (dispatch,getState) => {

        Elements
        .get(categoryId)
        .then(res => {

            dispatch({
                type: SET_ELEMENT,
                elements: res.content
            });
        })
    }
}
