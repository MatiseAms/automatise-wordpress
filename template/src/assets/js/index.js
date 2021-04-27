
import 'core-js/stable'
<% if (locomotive === 'yes') { %>
	import Highway from '@dogstudio/highway/'
	import TransitionRouter from './page-transitions/router.js'
	import { initScroll, locoScroll, stopScroll } from './base/scroll.js'
	import { gsap } from 'gsap'

export let H

const ua = window.navigator.userAgent
const isIE = /MSIE|Trident/.test(ua)
<% } %>

const initApp = () => {
	initPage()
	<% if (locomotive === 'yes') { %>

	initScroll()
	if (!isIE) {
		H = new Highway.Core({
			transitions: {
				default: TransitionRouter,
			},
		})
		H.on('NAVIGATE_OUT', ({ to, trigger, location }) => {
			locoScroll.scrollTo(0, { duration: 200, disableLerp: true })
			stopScroll()
		})
		H.on('NAVIGATE_END', ({ to, from, trigger, location }) => {
			initScroll()
		})
		H.on('NAVIGATE_IN', ({ to, from, trigger, location }) => {
			// closeNav() < If you use highway you should close the nav on navigate in
		})
	}
	<% } %>
}

export const initPage = () => {
	// Enter functions to init on page init
}

document.addEventListener('DOMContentLoaded', initApp)
