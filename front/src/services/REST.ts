import axios, { Method } from 'axios';
import { verbs } from '../constants/verbs.constants';
import store from './../settings/configureStore';
//service for Rest consumption
const request = (method:Method, endpoint:string, isAuthRequired:boolean, data?:object) => {

    interface Headers{
        [name:string]: string
    }
    let headers:Headers ={};
    headers['Accept'] = 'application/json'; 

    
    if(isAuthRequired){
        const auth = store.getState().auth;
        headers['authorization'] = `Bearer ${auth.token}`;
    }

    if(data){
        headers['Content-Type'] = 'application/json';
    }

    return axios.request({
        baseURL: process.env.REACT_APP_BASE_URL,
        url: `api/v${process.env.REACT_APP_API_V}/${endpoint}`,
        method: method,
        data: data,
        headers: headers
    })
    .then( (resp) => {  
        let payload = {
            content : resp.data,
        }
        return payload;
    });
}

const get = 
(endpoint:string, isAuthRequired:boolean) => request(verbs.GET,endpoint,isAuthRequired);

const post = 
(endpoint:string, isAuthRequired:boolean, data:object) => request(verbs.POST,endpoint,isAuthRequired,data);

const REST = {
    get,
    post
}

Object.freeze(REST);

export default REST;