
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('my-component', require('./components/MyComponent.vue'));
Vue.component('conditional-rendering', require('./components/ConditionalRendering.vue'));
Vue.component('conditional-rendering-v-else-if', require('./components/ConditionalRenderingVelseIf.vue'));
Vue.component('list-component', require('./components/ListComponent.vue'));
Vue.component('conditional-rendering-v-for-if', require('./components/ConditionalRenderingVforIf.vue'))
Vue.component('user-dashboard', require('./components/UserDashboard.vue'));
Vue.component('life-cycle', require('./components/LifeCycle.vue'));
Vue.component('force-update', require('./components/ForceUpdate.vue'));
Vue.component('binding-html', require('./components/BindingHTML.vue'));
Vue.component('vmodel-binding', require('./components/VModelBinding.vue'));
Vue.component('api-calling', require('./components/ApiCalling.vue'));

const app = new Vue({
    el: '#app'
});
