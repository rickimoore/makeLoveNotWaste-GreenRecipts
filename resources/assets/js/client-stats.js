
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// ES6
import Chart from 'chart.js';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#green',
    data: {
    },
    created(){
        var ctx = document.getElementById("myChart").getContext("2d");
        if(ctx){
            this.setChart(ctx);
        }
    },
    methods: {
        setChart: function (ctx) {
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                    datasets: [{
                        label: 'iphone',
                        data: [12, 19, 3, 17, 6, 3, 7],
                        backgroundColor: "rgba(67, 198, 219,0.4)"
                    }, {
                        label: 'samsung',
                        data: [2, 29, 5, 5, 2, 3, 10],
                        backgroundColor: "rgba(219, 88, 68,0.4)"
                    },
                        {
                            label: 'notebook',
                            data: [2, 32, 8, 5, 4, 3, 13],
                            backgroundColor: "rgba(84, 197, 113,0.4)"
                        },
                        {
                            label: 'notebook air',
                            data: [2, 2, 15, 7, 2, 8, 18],
                            backgroundColor: "rgba(196, 84, 168,0.4)"
                        }]
                }
            });
        }
    }
});
