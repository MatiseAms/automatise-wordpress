// Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll
<% if (locomotive === true) { %>

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import LocomotiveScroll from 'locomotive-scroll'
import { H } from '../index.js'
import TransitionRouter from '../page-transitions/router.js'

export let scrollTop = 0
export let locoScroll
const ua = window.navigator.userAgent
const isIE = /MSIE|Trident/.test(ua)
function isTouch() {
	try {
		document.createEvent('TouchEvent')
		return true
	} catch (e) {
		return false
	}
}

export const initScroll = () => {
	gsap.registerPlugin(ScrollTrigger)
	if (!isIE) {
		const body = document.querySelector('body')

		// Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll
		locoScroll = new LocomotiveScroll({
			el: document.querySelector('.smooth-scroll'),
			smooth: true,
			lerp: 0.3
		})
		let progress = 0
		let y = 0
		// each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
		locoScroll.on('scroll', () => {
			ScrollTrigger.update
		})

		// tell ScrollTrigger to use these proxy methods for the '.smooth-scroll' element since Locomotive Scroll is hijacking things
		ScrollTrigger.scrollerProxy('.smooth-scroll', {
			scrollTop(value) {
				return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y
			}, // we don't have to define a scrollLeft because we're only scrolling vertically.
			getBoundingClientRect() {
				return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight}
			},
			// LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
			pinType: document.querySelector('.smooth-scroll').style.transform ? 'transform' : 'fixed'
		})

		// each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll.
		ScrollTrigger.addEventListener('refresh', () => locoScroll.update())

		// after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
		ScrollTrigger.refresh()
		locoScroll.update()
	}
}


export const checkScroll = (direction) => {
	const routerTo = document.querySelector('[data-router-view]').getAttribute('data-router-view')
	if (direction) {
		locoScroll.destroy()
		locoScroll = new LocomotiveScroll({
			el: document.querySelector('.smooth-scroll'),
			smooth: true,
			lerp: 0.2,
			direction
		})
		locoScroll.update()
	}
}
export const stopScroll = () => {
	if (document.querySelector('.c-scrollbar')) {
		document.querySelector('.c-scrollbar').remove()
	}
	const html = document.querySelector('html')
	if (html) {
		html.classList.contains('.has-scroll-smooth')
		html.classList.add('hide-overflow')
	}
	locoScroll.stop()
	locoScroll.destroy()
	locoScroll.update()
}

<% } %>
