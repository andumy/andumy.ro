import { 
    SET_UTILS
} from "../constants/utils.constants";
import { ThunkResult } from '../types/actions';
import { currentPageType }from '../types/Utils/Utils';

export const setActiveCategory = (activeCategory:number):ThunkResult<void> => {

    return (dispatch,getState) => {
        const state = getState();
        const { utils } = {...state};
        dispatch({
            type:SET_UTILS, 
            utils: {
                ...utils,
                activeCategory,
                currentPage: currentPageType.element
            }
        });
    }
}

export const setCurrentPage = (currentPage:currentPageType):ThunkResult<void> => {

    return (dispatch,getState) => {
        const state = getState();
        const {utils} = {...state};
        dispatch({
            type:SET_UTILS, 
            utils: {
                ...utils,
                currentPage
            }
        });
    }
}