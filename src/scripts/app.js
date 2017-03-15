(function() {
    'use strict';

    var accountEl = document.getElementById('account');
    var closeLoginEl = document.getElementById('closeLogin');
    var maskEl = document.getElementById('mask');
    var loginEl = document.getElementById('login');

    if(accountEl) {
        accountEl.onclick = function(ev) {
            maskEl.className += ' show';
            loginEl.className += ' show';
        };
    }

    if (closeLoginEl) {
        closeLoginEl.onclick = function(ev) {
            maskEl.className = maskEl.className.replace(' show', '');
            loginEl.className = maskEl.className.replace(' show', '');
        }
    }
})();