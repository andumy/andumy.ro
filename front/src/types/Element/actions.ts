import {Element} from './Element'
import {
    SET_ELEMENT,
} from '../../constants/element.constants';


export interface SetElementAction {
    type: typeof SET_ELEMENT;
    elements: Element[];
}

export type ElementActionTypes = SetElementAction;