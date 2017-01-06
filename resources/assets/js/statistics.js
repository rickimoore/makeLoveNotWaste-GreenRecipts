
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
            var data = {
                datasets: [{
                    data: [
                        11,
                        16,
                        7,
                        3,
                        14
                    ],
                    backgroundColor: [
                        "#FF6384",
                        "#4BC0C0",
                        "#FFCE56",
                        "#E7E9ED",
                        "#36A2EB"
                    ],
                    label: 'My dataset' // for legend
                }],
                labels: [
                    "Food",
                    "Misc",
                    "Transportation",
                    "Beer",
                    "Games"
                ]
            };
            new Chart(ctx, {
                data: data,
                type: 'polarArea',
                options: {
                    elements: {
                        arc: {
                            borderColor: "#AFAAA2"
                        }
                    }
                }
            });
            // var data = {
            //     labels: ["January", "February", "March", "April", "May", "June", "July"],
            //     datasets: [
            //         {
            //             label: "My First dataset",
            //             fill: false,
            //             lineTension: 0.1,
            //             backgroundColor: "rgba(75,192,192,0.4)",
            //             borderColor: "rgba(75,192,192,1)",
            //             borderCapStyle: 'butt',
            //             borderDash: [],
            //             borderDashOffset: 0.0,
            //             borderJoinStyle: 'miter',
            //             pointBorderColor: "rgba(75,192,192,1)",
            //             pointBackgroundColor: "#fff",
            //             pointBorderWidth: 1,
            //             pointHoverRadius: 5,
            //             pointHoverBackgroundColor: "rgba(75,192,192,1)",
            //             pointHoverBorderColor: "rgba(220,220,220,1)",
            //             pointHoverBorderWidth: 2,
            //             pointRadius: 1,
            //             pointHitRadius: 10,
            //             data: [65, 59, 80, 81, 56, 55, 40],
            //             spanGaps: false,
            //         }
            //     ]
            // };
            // var myLineChart = new Chart(ctx, {
            //     type: 'line',
            //     data: data,
            //     options: {
            //         scales: {
            //             xAxes: [{
            //                 display: false
            //             }]
            //         }
            //     }
            // });
        }
    }
});
