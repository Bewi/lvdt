import React, { Component } from 'react';

class SearchComponent extends Component {

    render() {
        return (
            <div id="search" className="container">
                <div class="row">
                    <input type="text" placeholder="Rechercher un arôme, ingrédient ..." />
                    <img src="./images/search.svg" alt="" />
                </div>
            </div>
        );
    }

}

export default SearchComponent;