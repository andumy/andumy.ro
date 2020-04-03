import {Category} from './Category'

export const SET_CATEGORY = "SET_CATEGORY";
export const EDIT_CATEGORY = "EDIT_CATEGORY";

export interface SetCategoryAction {
    type: typeof SET_CATEGORY;
    category: Category;
}
export interface EditCategoryAction {
    type: typeof EDIT_CATEGORY;
    id: number;
}

export type CategoryActionTypes = SetCategoryAction | EditCategoryAction;
