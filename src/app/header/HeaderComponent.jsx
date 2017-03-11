import React, { Component } from 'react';
import {observer} from 'mobx-react';

import Hero from './HeroComponent.jsx';
import Search from './SearchComponent.jsx';
import Login from './LoginComponent.jsx';
import Mask from './MaskComponent.jsx';

@observer
class HeaderComponent extends Component {
    render() {
        return (
            <header>
                <Hero showLogin={this.props.loginState.show} />
                <Search />
                <Login visible={this.props.loginState.visible} hide={this.props.loginState.hide}/>
                <Mask visible={this.props.loginState.visible} />
            </header>
        );
    }
}

export default HeaderComponent;