import {combineReducers} from 'redux';

import {categoryReducer} from './category.reducer';
import {elementReducer} from './element.reducer';

const rootReducer = combineReducers({
    category: categoryReducer,
    element: elementReducer
})

export type AppState = ReturnType<typeof rootReducer>

export default rootReducer;