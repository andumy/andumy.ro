import { SET_AUTH_TOKEN } from "../constants/auth.constants";
import { Auth } from '../services/CRUD';
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
            dispatch({
                type: SET_AUTH_TOKEN,
                auth
            })

        })

        
    }
}

