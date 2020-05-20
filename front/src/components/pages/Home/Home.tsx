import React, { useEffect, useRef} from 'react';
import Navbar from './../../UI/organisms/Navbar/Navbar';
import Footer from './../../UI/organisms/Footer/Footer';

import theme from './Home.module.scss';
import SideText from './../../UI/atoms/SideText/SideText';
import { currentPageType } from '../../../types/Utils/Utils';
import {ReactComponent as Logo} from '../../../assets/svg/logo_full.svg';
import { useDispatch } from 'react-redux';
import { setCurrentPage } from '../../../actions/utils.action';

const Home:React.FC = () => {

    const swapPage = (e:React.MouseEvent<SVGSVGElement>) => {
        console.log(e);
    }
    const logoRef = useRef<SVGSVGElement>(null);
    const dispatch = useDispatch();

    useEffect(() => {
        if(logoRef.current !== null){   
            logoRef.current.childNodes.forEach((spline, index) => {

                /**
                 * since the order from top to bottom of elements is index = [2 0 1], in
                 * order to animate them in order, we must look at them from a binary
                 * point of view 
                 */
                (spline as HTMLElement).style.animationDelay = `${(index % 2 + 1 - index / 2)*0.7}s` ;
                (spline as HTMLElement).onanimationend = () => {
                    
                    //skip the middle part
                    if(index){
                        (spline as HTMLElement).classList.add(theme.home__logo__splineHover)
                    }
                }
                
                spline.addEventListener('click', () => {
                    switch (index){
                        case 1:
                            dispatch(setCurrentPage(currentPageType.category));
                        break;
                        case 2:
                            dispatch(setCurrentPage(currentPageType.studio));
                        break;
                        default:
                        break;
                    }
                })
            });
        }
    },[])

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
                    <Logo
                        className={theme.home__logo}
                        onClick={swapPage}
                        ref={logoRef}
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