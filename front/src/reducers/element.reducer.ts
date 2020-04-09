import {  
        ElementActionTypes 
        } from '../types/Element/actions';
import { Element } from "../types/Element/Element";
import { SET_ELEMENT } from './../constants/element.constants';

const elementReducerDefaultState:Element[] = [];

const elementReducer = (state = elementReducerDefaultState, action:ElementActionTypes): Element[] => {
    switch(action.type){
        case SET_ELEMENT:
            return action.elements;
            break;
        default:
            return state;
            break;
    }
}

export {elementReducer}