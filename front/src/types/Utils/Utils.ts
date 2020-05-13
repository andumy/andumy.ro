export interface Utils {
    activeCategory: number ,
    currentPage: currentPageType,
    studio:studioType,
}

export interface studioType {
    title:string,
    description:string
}

export enum currentPageType {
    "home",
    "studio",
    "element",
    "category"
}