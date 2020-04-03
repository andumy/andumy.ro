import { Element } from "../types/Element/Element";
import { AppActions } from "../types/actions";
import { SET_ELEMENT } from "../types/Element/actions";

export const setElement = (element: Element): AppActions =>({
    type: SET_ELEMENT,
    element
})