import React from 'react';
import Navbar from './../../UI/organisms/Navbar/Navbar';
import { studioType, currentPageType } from '../../../types/Utils/Utils';
import { AppState } from '../../../reducers';
import { useSelector } from 'react-redux';
import theme from './Studio.module.scss';
import SideText from './../../UI/atoms/SideText/SideText';
const Studio:React.FC = () => {

    const studio = useSelector<AppState,studioType>(state => state.utils.studio)
    return( 
        <div >
            <Navbar/>
            <div className={theme.studio__content}>
                <SideText
                    word={'se/rv/ic/es'}
                    goTo={currentPageType.category}
                    position={'left'}
                />
                <div className={theme.studio__content__texts}>
                    <h1>{studio.title.toUpperCase()}</h1>
                    <span>{studio.description}</span>
                </div>
                <SideText
                    word={'ho/me'}
                    goTo={currentPageType.home}
                    position={'right'}
                />
            </div>
        </div>
    );
}

export default Studio;