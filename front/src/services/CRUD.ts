import REST from './REST';

export const Category = {
    get: () => REST.get('getCategories',true),
}

export const Elements = {
    get: (categoryId:number) => REST.get(`getElements/${categoryId}`,true),
}

export const Auth = {
    login: (authToken:object) => REST.post('login',false,authToken),
}

export const Utils = {
    get: () => REST.get(`getStudio`,true),
}