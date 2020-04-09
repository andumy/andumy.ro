import React, { useState, useEffect } from 'react';
import { getAuthToken } from './../../actions/auth.action';
import { Auth } from '../../types/Auth/Auth';
import { useSelector, useDispatch } from 'react-redux';
import { AppState } from '../../reducers';
import { getCategory } from './../../actions/category.action';



const Bootstrap:React.FC<any> = (props:any) =>{

    const [isLoading,setIsLoading] = useState(true);
    const auth = useSelector<AppState, Auth>(state => state.auth)
    const dispatch = useDispatch();

    useEffect(() => {

        if(auth.token === ''){
            dispatch(getAuthToken());
        } else {
            setIsLoading(false);
            dispatch(getCategory());
        }

    }, [auth.token])

    if(isLoading){
        return null;
    }

    return (
        <React.Fragment>
            {props.children}
        </React.Fragment>
    );
}


export default Bootstrap;