
import 'core-js/stable'
<% if (smoothscroll) { %>
	import { initRouter } from './router/index'
	import { TransitionBasic } from './router/transitions/transition-basic'
	export let transitionBasic
	import { initScroll } from './base/scroll.js'
	import { gsap } from 'gsap'

const ua = window.navigator.userAgent
const isIE = /MSIE|Trident/.test(ua)
<% } %>
import { initLazyLoad } from './base/lazy-load'

const initApp = () => {
	initPage()
	<% if (smoothscroll) { %>
	initRouter()
	initScroll()
	<% } %>
	}
	
	export const initPage = () => {
		// Enter functions to init on page init
		<% if (smoothscroll) { %> transitionBasic = new TransitionBasic() <% } %>
		initLazyLoad()
	}
	
	document.addEventListener('DOMContentLoaded', initApp)
	