import {Category} from './Category';
import {
    SET_CATEGORY,
    EDIT_CATEGORY
} from '../../constants/category.constants';




export interface SetCategoryAction {
    type: typeof SET_CATEGORY;
    category: Category[];
}
export interface EditCategoryAction {
    type: typeof EDIT_CATEGORY;
    id: number;
}

export type CategoryActionTypes = SetCategoryAction | EditCategoryAction;
