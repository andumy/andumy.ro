import { CategoryActionTypes } from './Category/actions';
import { ElementActionTypes } from './Element/actions';
import { AuthActionTypes } from './Auth/actions';
import { UtilsActionTypes } from './Utils/actions';
import { ThunkAction } from 'redux-thunk';
import { AppState } from '../reducers';


export type AppActions = 
    CategoryActionTypes | 
    ElementActionTypes | 
    AuthActionTypes | 
    UtilsActionTypes;

export type ThunkResult<R> = ThunkAction<R, AppState, undefined, AppActions>;



