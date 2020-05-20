import React from 'react';
import Navbar from './../../UI/organisms/Navbar/Navbar';
import Footer from './../../UI/organisms/Footer/Footer';

import theme from './Home.module.scss';
import SideText from './../../UI/atoms/SideText/SideText';
import { currentPageType } from '../../../types/Utils/Utils';
import {ReactComponent as LogoTopArrow} from '../../../assets/svg/logo_top_arrow.svg';
import {ReactComponent as LogoBotArrow} from '../../../assets/svg/logo_bottom_arrow.svg';
import {ReactComponent as LogoMidArrow} from '../../../assets/svg/logo_middle_arrow.svg';

const Home:React.FC = () => {


    return( 
    
        <div>
            <Navbar/>
            <div className={theme.home__container}>
                <SideText
                    word={'st/ud/io'}
                    goTo={currentPageType.studio}
                    position={'left'}
                />
                <div className={theme.home__container__logo}>
                    <LogoTopArrow
                        className={theme.home__logo}
                        onPointerEnter={() => console.log('top')}
                    />
                    <LogoMidArrow
                        className={theme.home__logo}
                        onPointerEnter={() => console.log('mid')}
                    />
                    <LogoBotArrow
                        className={theme.home__logo}
                        onPointerEnter={() => console.log('bot')}
                    />
                </div>
                <SideText
                    word={'se/rv/ic/es'}
                    goTo={currentPageType.category}
                    position={'right'}
                />
            </div>
            <Footer/>
        </div>
    );
}

export default Home;