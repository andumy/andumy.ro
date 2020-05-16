
import React from 'react';
import { currentPageType}  from '../../../../types/Utils/Utils';
import theme from './Footer.module.scss';
import { AppState } from '../../../../reducers';
import { useSelector } from 'react-redux';
import Fa from './../../atoms/Fa/Fa';

const Footer:React.FC = () => {

    const currentPage = useSelector<AppState,currentPageType>(state => state.utils.currentPage);
    const date = new Date();
    return (
        <div className={theme.footer__container}>
            {
                currentPage === currentPageType.studio ? 
                    <div>
                        <p>
                            <Fa
                                icon={'copyright'}
                                type={'far'}
                            />
                            {date.getFullYear()} Andrei Dumitrescu all rights reserved.
                        </p>
                        <div>
                            <Fa 
                                icon={'dribbble'}
                                type={'fab'}
                            />
                            <Fa
                                icon={'gitlab'}
                                type={'fab'}
                            />
                            <Fa
                                icon={'github'}
                                type={'fab'}
                            />
                            <Fa
                                icon={'facebook-f'}
                                type={'fab'}
                            />
                            <Fa
                                icon={'linkedin-in'}
                                type={'fab'}
                            />
                        </div>
                    </div>
                : currentPage === currentPageType.home ? 
                    <span>ANDUMY<p>STUDIO</p></span>
                    :  <i></i>

            }
        </div>
    )
}

export default Footer;