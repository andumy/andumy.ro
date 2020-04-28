import { 
    Utils, 
} from './Utils';

import {
    SET_UTILS
} from '../../constants/utils.constants';

export interface SetUtilsAction {
    type: typeof SET_UTILS,
    utils: Utils
}

export type UtilsActionTypes = SetUtilsAction;