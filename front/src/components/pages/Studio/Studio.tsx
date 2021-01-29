import React from 'react';
import Footer from './../../UI/organisms/Footer/Footer';
import { studioType, currentPageType } from '../../../types/Utils/Utils';
import { AppState } from '../../../reducers';
import { useSelector } from 'react-redux';
import theme from './Studio.module.scss';
import SideText from '../../UI/atoms/SideText/SideText';
import { textPosition } from '../Category/Category';
const Studio:React.FC = () => {

    const studio = useSelector<AppState,studioType>(state => state.utils.studio)
    return( 
        <div >
            <div className={theme.studio__container}>
                <SideText
                    word={'se/rv/ic/es'}
                    goTo={currentPageType.category}
                    position={textPosition.left}
                />
                <div className={theme.studio__texts}>
                    <h1>{studio.title.toUpperCase()}</h1>
                    <span>{studio.description}</span>
                </div>
                <SideText
                    word={'ho/me'}
                    goTo={currentPageType.home}
                    position={textPosition.right}
                />
            </div>
            <Footer
                page={'studio'}
            />
        </div>
    );
}

export default Studio;