import React, { useEffect, useState, CSSProperties  } from 'react';
import MenuBurger from '../../molecules/MenuBurger/MenuBurger';
import theme from './Navbar.module.scss';
import {ReactComponent as LogoIcon} from '../../../../assets/svg/logo_full.svg';
import { useSelector, useDispatch } from 'react-redux';
import { AppState } from '../../../../reducers';
import { currentPageType } from '../../../../types/Utils/Utils';
import { setCurrentPage } from './../../../../actions/utils.action';



const Navbar:React.FC<any> = () => {
    
    const currentPage = useSelector<AppState,currentPageType>(state => state.utils.currentPage);
    const [showLogo,setShowLogo] = useState<CSSProperties>({
        visibility: currentPage === currentPageType.home ? "hidden" : 'visible'
    } )
    const dispatch = useDispatch();

    useEffect(() => {
        console.log(showLogo);
        setShowLogo({
            visibility: currentPage === currentPageType.home ? "hidden" : 'visible'
        });
    },[currentPage])

    const returnHome = () => {
        dispatch(setCurrentPage(currentPageType.home));
    }
    return(
        <nav id="burger" className={theme.navbar}>
            <LogoIcon
                className={theme.navbar__logo}
                style={showLogo} 
                onClick={returnHome}
            />
            <MenuBurger/>
        </nav>
    )
}

export default Navbar;