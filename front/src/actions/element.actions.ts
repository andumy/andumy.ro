import { Element } from "../types/Element/Element";
import { AppActions } from "../types/actions";
import { SET_ELEMENT } from "../constants/element.constants";

export const setElement = (elements: Element[]): AppActions =>({
    type: SET_ELEMENT,
    elements
})