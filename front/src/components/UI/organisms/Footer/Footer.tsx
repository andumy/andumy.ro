
import React from 'react';
import { currentPageType}  from '../../../../types/Utils/Utils';
import theme from './Footer.module.scss';
import Fa from '../../atoms/Fa/Fa';

interface FooterType {
    page: 'studio' | 'home'
}

const Footer:React.FC<FooterType> = ({
    page
}) => {

    const date = new Date();
    return (
        <div className={theme.footer__container}>
            {
                page === 'studio' ? 
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
                : page === 'home' ? 
                    <span>ANDUMY<p>STUDIO</p></span>
                    :  <i></i>

            }
        </div>
    )
}

export default Footer;