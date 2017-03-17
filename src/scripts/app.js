(function() {
    'use strict';

    var accountEl = document.getElementById('account');
    var closeLoginEl = document.getElementById('closeLogin');
    var maskEl = document.getElementById('mask');
    var loginEl = document.getElementById('login');

    var navTogglerEl = document.getElementById('toggler');
    var navItemsEl = document.getElementById('nav-items');

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

    if (navTogglerEl && navItemsEl) {
        navTogglerEl.onclick = function(ev) {
            if (navTogglerEl.className.indexOf(' toggled') >= 0) {
                navTogglerEl.className= navTogglerEl.className.replace(' toggled', '');
                navItemsEl.className = navItemsEl.className.replace(' show', '');
            } else {
                navTogglerEl.className += ' toggled';
                navItemsEl.className += ' show';
            }
        }
    }
})();