import {  
    UtilsActionTypes 
    } from '../types/Utils/actions';
import { Utils, currentPageType } from './../types/Utils/Utils';
import { 
    SET_UTILS,
    SET_ACTIVE_CATEGORY,
    SET_CURRENT_PAGE,
} from './../constants/utils.constants';

const elementReducerDefaultState:Utils = {
    currentPage: currentPageType.home,
    activeCategory: 0,
};

const utilsReducer = (state = elementReducerDefaultState, action:UtilsActionTypes): Utils => {
    switch(action.type){
        case SET_UTILS :
            return action.utils;
            break;
        case SET_ACTIVE_CATEGORY:
            return action.utils;
            break;
        case SET_CURRENT_PAGE:
            return action.utils;
            break;
        default:
            return state;
            break;
    }
}

export {utilsReducer}