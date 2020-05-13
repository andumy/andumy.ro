import { 
    SET_ACTIVE_CATEGORY,
    SET_CURRENT_PAGE,
    SET_SCROLL,
    SET_STUDIO
} from "../constants/utils.constants";
import { ThunkResult } from '../types/actions';
import { currentPageType, studioType }from '../types/Utils/Utils';
import { Utils } from "../services/CRUD";

export const setActiveCategory = (activeCategory:number):ThunkResult<void> => {

    return (dispatch,getState) => {
        const state = getState();
        const { utils } = {...state};
        dispatch({
            type:SET_ACTIVE_CATEGORY, 
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
            type:SET_CURRENT_PAGE, 
            utils: {
                ...utils,
                currentPage
            }
        });
    }
}

export const setStudio = ():ThunkResult<void> => {

    return (dispatch,getState) => {
        const state = getState();
        const {utils} = {...state};
        Utils
        .get()
        .then(res => {
            dispatch({
                type: SET_STUDIO,
                utils: {
                    ...utils,
                    studio:res.content
                }
            });
        })
    }
}