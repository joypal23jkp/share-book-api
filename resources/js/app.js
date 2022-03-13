import Vue from "vue";
import Vuesax from "vuesax";
import router from "./router";
import "vuesax/dist/vuesax.css";

require('./bulma.scss');
window.Vue = require('vue')

Vue.use(Vuesax)


Vue.component('button-counter', function (resolve, reject){
setTimeout(function () {
    resolve({template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'})
}, 1000);


})

Vue.directive('focus', {
    inserted: el => {
        el.focus();
    },
})

const app = new Vue({
    el : '#app',
    router,
});
