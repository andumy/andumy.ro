import { Method } from 'axios';

interface Verbs{
    [name:string]: Method
}

export const verbs:Verbs = {
    GET: "GET",
    POST: "POST"
};