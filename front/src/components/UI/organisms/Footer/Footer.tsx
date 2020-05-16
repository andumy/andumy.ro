
import React from 'react';
import { currentPageType}  from '../../../../types/Utils/Utils';
import theme from './Footer.module.scss';
import { AppState } from '../../../../reducers';
import { useSelector } from 'react-redux';


const Footer:React.FC = () => {

    const currentPage = useSelector<AppState,currentPageType>(state => state.utils.currentPage)
    return (
        <div className={theme.footer__container}>
            {
                currentPage === currentPageType.studio ? 
                    <div></div>
                : currentPage === currentPageType.home ? 
                    <span>ANDUMY<p>STUDIO</p></span>
                    :  <i></i>

            }
        </div>
    )
}

export default Footer;