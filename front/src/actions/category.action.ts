import { Category } from "../types/Category/Category";
import { SET_CATEGORY } from "../types/Category/actions";
import { AppActions } from '../types/actions';

export const setCategory = (category: Category): AppActions => ({
    type: SET_CATEGORY,
    category
})