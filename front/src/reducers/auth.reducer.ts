import { Auth } from './../types/Auth/Auth';
import {AuthActionTypes} from '../types/Auth/actions';
import { SET_AUTH_TOKEN } from './../constants/auth.constants';

const authReducerDefaultState: Auth = {
user:"react@andumy.ro",
secret: "api",
token: ""
};

const authReducer = (state = authReducerDefaultState, action: AuthActionTypes): Auth => {
switch(action.type){ 
    case SET_AUTH_TOKEN:
        return action.auth;
        break;
    default:
        return state;
        break;
}
}

export {authReducer}