import {Element} from './Element'

export const SET_ELEMENT = "SET_ELEMENT";
export const EDIT_ELEMENT = "EDIT_ELEMENT";

export interface SetElementAction {
    type: typeof SET_ELEMENT;
    elements: Element[];
}

export interface EditElementAction {
    type: typeof EDIT_ELEMENT;
    id: number;
}

export type ElementActionTypes = SetElementAction | EditElementAction;