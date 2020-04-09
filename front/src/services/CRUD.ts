import REST from './REST';
import { Auth as AuthType } from './../types/Auth/Auth';

export const Category = {
    get: () => REST.get('getCategories',true),
}

export const Elements = {
    get: (categoryId:number) => REST.get(`getElements/${categoryId}`,true),
}

export const Auth = {
    login: (authToken:object) => REST.post('login',false,authToken),
}

