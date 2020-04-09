import { SET_AUTH_TOKEN } from "../constants/auth.constants";
import { AppActions } from '../types/actions';
import { ThunkAction } from 'redux-thunk';
import { AppState } from '../reducers';
import { Auth } from '../services/CRUD';
import { Auth as AuthType } from './../types/Auth/Auth';
import { ThunkResult } from '../types/actions';


export const getAuthToken = ():ThunkResult<void> => {

    return (dispatch,getState) => {
        const store = getState();
        const authObject = {
            email: store.auth.user,
            password: store.auth.secret
        }

        Auth
        .login(authObject)
        .then(res => {
            const auth = {
                user: store.auth.user,
                secret: store.auth.secret,
                token: res.content.access_token,
            }
            dispatch(setAuthToken(auth));
        })
    }
}


export const setAuthToken = (auth: AuthType): AppActions => ({
    type: SET_AUTH_TOKEN,
    auth
})
