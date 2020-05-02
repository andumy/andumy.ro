import React from 'react';
import Navbar from '../../UI/organisms/Navbar/Navbar';
import CategoryBox from './../../UI/atoms/CategoryBox/CategoryBox';

const Category:React.FC = () => {
    

    return(
        <div>
            <Navbar/>
            <h1>CATEGORY</h1>
            <CategoryBox
                name={'ceva'}
            />
        </div>
    );

}

export default Category;