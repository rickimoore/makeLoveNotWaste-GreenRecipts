
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#green',
    data: {
        timeout: 0,
        isTitle: false,
        isPresent: true,
        isReveal: false,
        isMenu: false
    },
    mounted(){
        var self = this;
        var cookie = this.checkDCookie('rcpt-skip');
        if(!cookie){
            clearTimeout(this.timeout);
            return this.timeout = setTimeout(function () {
                self.isTitle = true;
                clearTimeout(self.timeout);
                self.timeout = setTimeout(function () {
                    self.isReveal = true;
                    clearTimeout(self.timeout);
                    self.timeout = setTimeout(function () {
                        self.isMenu = true;
                        self.setDCookie('rcpt-skip', 'skip=true;', 1);
                        clearTimeout(self.timeout);
                        self.timeout = setTimeout(function () {
                            window.location.href = 'http://greenrecipts.app/new-receipt';
                        }, 5000);
                    }, 1000);
                }, 1500);
            }, 1000);
        }

        this.isReveal = true;
        this.isTitle = true;
        this.isMenu = true;
    },
    methods: {
        checkDCookie: function (cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length,c.length);
                }
            }
            return null;
        },
        setDCookie: function (cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        },
    }
});
