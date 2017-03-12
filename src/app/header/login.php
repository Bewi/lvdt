 <div id="login" className={this.props.visible ? 'show' : ''}>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <img id="logo" src="./images/logo-light.svg" alt="" />
            </div>
            <div id="account" class="col-md-offset-7 col-xs-1 col-sm-1 col-md-1 col-lg-1" onClick={this.props.hide}>
                fermer    
            </div>
        </div>
        <div class="row">
            <form>
                <div class="input-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <label>e-mail</label>
                    <input type="text" />
                </div>
                <div class="input-group col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <label>password</label>
                    <input type="password" class="invalid" />
                </div>
                <div class="input-group col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <input type="submit" value="valider"/>
                </div>
            </form>
        </div>
    </div>
</div>