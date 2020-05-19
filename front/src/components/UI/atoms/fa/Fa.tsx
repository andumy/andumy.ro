import React from 'react';
// Importing types from the API library along with other exports
import { library, IconName, IconPrefix } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

import { far } from '@fortawesome/free-regular-svg-icons';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';

library.add(fas, fab, far)

interface FaType {
    icon: IconName,
    type: IconPrefix,
    className?: string
}

const Fa:React.FC<FaType> = ({
    icon,
    type='fab',
    className=''
}) => {

    return(
        <FontAwesomeIcon
            icon={[type , icon]}
            className={className}
        />
    );

}

export default Fa