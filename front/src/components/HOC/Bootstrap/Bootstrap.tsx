import React, { useState, useEffect } from 'react';
import { getAuthToken } from '../../../actions/auth.action';
import { Auth as AuthType} from '../../../types/Auth/Auth';
import { useSelector, useDispatch } from 'react-redux';
import { AppState } from '../../../reducers';
import { getCategory } from '../../../actions/category.action';
import { setStudio } from './../../../actions/utils.action';
import { Category as CategoryType } from './../../../types/Category/Category';



const Bootstrap:React.FC<any> = (props:any) =>{

    const [isLoading,setIsLoading] = useState(true);
    const auth = useSelector<AppState, AuthType>(state => state.auth)
    const categories = useSelector<AppState, CategoryType[]>(state => state.categories)
    const dispatch = useDispatch();

    useEffect(() => {

        if(auth.token === ''){
            dispatch(getAuthToken());
        } else {
            dispatch(getCategory());
            dispatch(setStudio());
        }

    }, [auth.token])

    useEffect(() => {
        if(categories.length > 1){
            console.log(categories)
            setIsLoading(false);
        }
    },[categories])

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