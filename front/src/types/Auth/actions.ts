import { Auth } from './Auth';
import { SET_AUTH_TOKEN } from './../../constants/auth.constants';

export interface SetAuthTokenAction {
    type: typeof SET_AUTH_TOKEN;
    auth: Auth;
}

export type AuthActionTypes = SetAuthTokenAction;

