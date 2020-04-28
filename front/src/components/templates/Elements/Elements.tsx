import React from 'react';
import { useSelector } from 'react-redux';
import { AppState } from '../../../reducers';
import { Element as ElementType } from './../../../types/Element/Element';
import Navbar from '../../UI/organisms/Navbar/Navbar';

const Elements:React.FC = () => {

    const elements = useSelector<AppState,ElementType[]>(state => state.elements)
    
    return (
        <div>
            <Navbar/>
            {
                elements.map((element,i) => 
                    <div 
                        key={element.description}
                    >
                        {element.description}
                    </div>
                )
            }
        </div>
    )
}

export default Elements;