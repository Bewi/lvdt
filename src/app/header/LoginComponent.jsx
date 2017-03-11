import React, { Component } from 'react';

class LoginComponent extends Component {

    render() {
        return (
            <div id="login" className={this.props.visible ? 'show' : ''}>
                <div className="container">
                    <div className="row">
                        <div className="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <img id="logo" src="./images/logo-light.svg" alt="" />
                        </div>
                        <div id="account" className="col-md-offset-7 col-xs-1 col-sm-1 col-md-1 col-lg-1" onClick={this.props.hide}>
                            fermer    
                        </div>
                    </div>
                    <div className="row">
                        <form>
                            <div className="input-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>e-mail</label>
                                <input type="text" />
                            </div>
                            <div className="input-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>password</label>
                                <input type="password" className="invalid" />
                            </div>
                            <div className="input-group col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <input type="submit" value="valider"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}

export default LoginComponent;