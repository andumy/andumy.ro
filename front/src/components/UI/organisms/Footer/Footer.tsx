
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
                    <div className={theme.footer__studio__container}>
                        <p className={theme.footer__studio__copyright}> 
                            <Fa
                                icon={'copyright'}
                                type={'far'}
                            />
                            {date.getFullYear()} Andrei Dumitrescu all rights reserved.
                        </p>
                        <div className={theme.footer__studio__container__icons}>
                            <a target="_blank" href={process.env.REACT_APP_DRIBBLE_URL}>
                                <Fa 
                                    icon={'dribbble'}
                                    type={'fab'}
                                    className={theme.footer__studio__icons}
                                />
                            </a>
                            <a target="_blank" href={process.env.REACT_APP_GITLAB_URL}>
                                <Fa 
                                    icon={'gitlab'}
                                    type={'fab'}
                                    className={theme.footer__studio__icons}
                                />
                            </a>
                            <a target="_blank" href={process.env.REACT_APP_GITHUB_URL}>
                                <Fa 
                                    icon={'github'}
                                    type={'fab'}
                                    className={theme.footer__studio__icons}
                                />
                            </a>
                            <a target="_blank" href={process.env.REACT_APP_FACEBOOK_URL}>
                                <Fa 
                                    icon={'facebook-f'}
                                    type={'fab'}
                                    className={theme.footer__studio__icons}
                                />
                            </a>
                            <a target="_blank" href={process.env.REACT_APP_LINKEDIN_URL}>
                                <Fa 
                                    icon={'linkedin-in'}
                                    type={'fab'}
                                    className={theme.footer__studio__icons}
                                />
                            </a>
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