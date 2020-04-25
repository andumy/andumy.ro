import React from 'react';
// Importing types from the API library along with other exports
import { library, IconName, IconPrefix } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faBars } from '@fortawesome/free-solid-svg-icons'
import { faFacebookF }from '@fortawesome/free-brands-svg-icons';

library.add(
    faBars,
    faFacebookF
)

interface FaType {
    icon: IconName,
    type: IconPrefix,
    className: string
}

const Fa:React.FC<FaType> = ({
    type='fab',
    icon,
    className
}) => {

    return(
        <FontAwesomeIcon
            icon={[type , icon]}
            className={className}
        />
    );

}

export default Fa