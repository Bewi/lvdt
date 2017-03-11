import React from 'react';
import Header from './header/HeaderComponent.jsx';
import loginState from './header/loginState.js';

const element = (
    <div >
        <Header loginState={loginState} />
    </div>
)

ReactDOM.render(
    element,
    document.getElementById('app')
);