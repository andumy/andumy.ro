import React, { useState } from 'react';
import theme from './MenuBurger.module.scss'
import MenuOverlay from './../MenuOverlay/MenuOverlay';



const MenuBurger = () => {
    const [isClicked, setClick] = useState(false);

    const style = isClicked ? theme.burger__inverse: theme.burger__normal ;

    return(
        <div>    
            <div className={style} onClick={() => setClick(!isClicked)}>
                <span className={theme.burger__line}></span>
                <span className={theme.burger__line}></span>
                <span className={theme.burger__line}></span>
            </div>
            {
                isClicked ?  
                    <MenuOverlay 
                    isShowned = {isClicked}
                    />
                :
                    '' 
            }
        </div>
    );

}

export default MenuBurger