import {Element} from './Element'
import {
    SET_ELEMENT,
    EDIT_ELEMENT
} from '../../constants/element.constants';


export interface SetElementAction {
    type: typeof SET_ELEMENT;
    elements: Element[];
}

export interface EditElementAction {
    type: typeof EDIT_ELEMENT;
    id: number;
}

export type ElementActionTypes = SetElementAction | EditElementAction;