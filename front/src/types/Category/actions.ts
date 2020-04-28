import {Category} from './Category';
import {
    SET_CATEGORY,
} from '../../constants/category.constants';


export interface SetCategoryAction {
    type: typeof SET_CATEGORY;
    category: Category[];
}

export type CategoryActionTypes = SetCategoryAction ;
