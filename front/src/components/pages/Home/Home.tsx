import React from 'react';
import Navbar from './../../UI/organisms/Navbar/Navbar';

import theme from './Home.module.scss';
import SideText from './../../UI/atoms/SideText/SideText';
import { currentPageType } from '../../../types/Utils/Utils';

const Home:React.FC = () => {


    return( 
    
        <div>
            <Navbar/>
            <div className={theme.home__content}>
                <SideText
                    word={'st/ud/io'}
                    goTo={currentPageType.studio}
                    position={'left'}
                />
                <div className={theme.home__content__logo}>
                    Logo
                </div>
                <SideText
                    word={'se/rv/ic/es'}
                    goTo={currentPageType.category}
                    position={'right'}
                />
            </div>
            
        </div>
    );
}

export default Home;