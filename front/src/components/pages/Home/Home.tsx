import React from 'react';
import Navbar from './../../UI/organisms/Navbar/Navbar';
import CategorySlider from './../../UI/molecules/CategorySlider/CategorySlider';

const Home:React.FC = () => {


    return( 
    
        <div>
            <Navbar/>
            <h1>HOME</h1>
            <CategorySlider/>
        </div>
    );
}

export default Home;