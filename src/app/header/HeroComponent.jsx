import React, {Component} from 'react';

class HeroComponent extends Component {
    render() {
        return (
            <div id="hero">
                <div className="container">
                    <div className="row">
                        <div className="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <img src="./images/logo.svg" />
                        </div>
                        <div id="account" className="col-md-offset-7 col-xs-1 col-sm-1 col-md-1 col-lg-1" onClick={this.props.showLogin}> 
                            mon compte
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default HeroComponent;
