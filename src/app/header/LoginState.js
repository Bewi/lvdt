import {observable, action} from 'mobx';

var loginState = observable({
    visible: false
});

loginState.show = action(() => loginState.visible = true);
loginState.hide = action(() => loginState.visible = false);

export default loginState;