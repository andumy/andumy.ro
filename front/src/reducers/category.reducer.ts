import { 
        CategoryActionTypes 
        } from '../types/Category/actions';
import { Category } from '../types/Category/Category';
import { SET_CATEGORY } from './../constants/category.constants';


const categoryReducerDefaultState: Category[] = [{
    id: 0,
    name: "Home",
    cta: "See More",
    description: "Description",
    order: 0,
    image: "No Image",
}];

const categoryReducer = (state = categoryReducerDefaultState, action: CategoryActionTypes): Category[] => {
    switch(action.type){ 
        case SET_CATEGORY:
            return action.category;
            break;
        default:
            return state;
            break;
    }
}

export {categoryReducer}