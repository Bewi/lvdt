import React, {Component} from 'react';

class MaskComponent extends Component {
    render() {
        return <div id="mask" className={this.props.visible ? 'show' : ''}></div>;
    }
}

export default MaskComponent;