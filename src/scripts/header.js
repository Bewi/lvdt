(function() {
    'use strict';

    console.log(document.getElementById('account'));

    var accountEl = document.getElementById('account');
    var closeLoginEl = document.getElementById('closeLogin');
    var maskEl = document.getElementById('mask');
    var loginEl = document.getElementById('login');


    accountEl.onclick = function(ev) {
        maskEl.className += ' show';
        loginEl.className += ' show';
    };

    closeLoginEl.onclick = function(ev) {
        maskEl.className = maskEl.className.replace(' show', '');
        loginEl.className = maskEl.className.replace(' show', '');
    }

})();