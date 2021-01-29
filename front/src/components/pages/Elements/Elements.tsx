import React from 'react';
import { useSelector } from 'react-redux';
import { AppState } from '../../../reducers';
import { Element as ElementType } from '../../../types/Element/Element';
import Navbar from '../../UI/organisms/Navbar/Navbar';
import theme from './Elements.module.scss';
const Elements:React.FC = () => {

    const elements = useSelector<AppState,ElementType[]>(state => state.elements)
    
    return (

        <div className={theme.elements__container}>
            <h1>ELEMENTS</h1>
        </div>
    )
}

export default Elements;