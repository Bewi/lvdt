import React, { Component } from 'react';
import {observer} from 'mobx-react';

import Hero from './HeroComponent.jsx';
import Search from './SearchComponent.jsx';

@observer
class HeaderComponent extends Component {
    render() {
        return (
            <header>
                <Hero />
                <Search />
            </header>
        )
    }
}

export default HeaderComponent;