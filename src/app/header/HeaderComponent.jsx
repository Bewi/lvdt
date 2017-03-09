import React, { Component } from 'react';
import {observer} from 'mobx-react';

@observer
class HeaderComponent extends Component {
    render() {
        return (
            <header>Bois ton thé ! {this.props.appState.timer}</header>
        )
    }
}

export default HeaderComponent;