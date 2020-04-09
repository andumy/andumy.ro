import {combineReducers} from 'redux';

import {categoryReducer} from './category.reducer';
import {elementReducer} from './element.reducer';
import {authReducer} from './auth.reducer';

const rootReducer = combineReducers({
    categories: categoryReducer,
    elements: elementReducer,
    auth: authReducer,
})

export type AppState = ReturnType<typeof rootReducer>

export default rootReducer;