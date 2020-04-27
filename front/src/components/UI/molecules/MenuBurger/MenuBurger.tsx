import React, { useState } from 'react';
import theme from './MenuBurger.module.scss'
import MenuOverlay from './../MenuOverlay/MenuOverlay';
import classNames from 'classnames';



const MenuBurger = () => {
    const [isClicked, setClick] = useState(false);

    const style = classNames({
        [theme.burger__generic] : true,
        [theme.burger__inverse] : isClicked,
        [theme.burger__normal] : !isClicked
    });

    return(
        <div>    
            <div className={style} onClick={() => setClick(!isClicked)}>
                <span className={theme.burger__line}></span>
                <span className={theme.burger__line}></span>
                <span className={theme.burger__line}></span>
            </div>
            <MenuOverlay 
                startDisplay={isClicked}
            />
        </div>
    );

}

export default MenuBurger