import { 
    Utils, 
} from './Utils';

import {
    SET_UTILS,
    SET_ACTIVE_CATEGORY,
    SET_CURRENT_PAGE,
    SET_STUDIO
} from '../../constants/utils.constants';

export interface SetUtilsAction {
    type: 
        typeof SET_UTILS | 
        typeof SET_ACTIVE_CATEGORY | 
        typeof SET_CURRENT_PAGE | 
        typeof SET_STUDIO,
    utils: Utils
}

export type UtilsActionTypes = SetUtilsAction;