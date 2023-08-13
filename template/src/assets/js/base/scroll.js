// Using Smooth Scroll from Lenis https://lenis.studiofreight.com/
<% if (smoothscroll == 'true') { %>
import Lenis from '@studio-freight/lenis'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
gsap.registerPlugin(ScrollTrigger)
	
export let scrollTop = 0
export let lenisScroll
	
export const initScroll = () => {
	lenisScroll = new Lenis({
		duration: 1,
		easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)), // https://easings.net
		smooth: window.innerWidth > 1024 ? true : false,
		direction: 'vertical'
	})

	const header = document.querySelector('.header')
	//get scroll value
	lenisScroll.on('scroll', ({
		scroll
	}) => {
		scrollTop = scroll
		if (scrollTop > 10) {
			header.classList.add('has-background')
		} else {
			header.classList.remove('has-background')
		}
	})

	document.querySelector('html').classList.remove('hide-overflow')

	function raf(time) {
		lenisScroll.raf(time)
		requestAnimationFrame(raf)
	}
	requestAnimationFrame(raf)

	// In view class:
	const inViewElements = [...document.querySelectorAll('[data-scroll]')]
	inViewElements.forEach(el => {
		gsap.to(el, {
			scrollTrigger: {
				trigger: el,
				start: el.dataset.scrollOffsetY ? `top-=${window.innerHeight * el.dataset.scrollOffsetY}` : `top-=${window.innerHeight * 1.5}`,
				scrub: false,
				once: true,
				toggleClass: 'is-inview',
			}
		})

	})
}


export const stopScroll = () => {
	const html = document.querySelector('html')
	if (html) {
		html.classList.add('hide-overflow')
	}
	lenisScroll.stop()
}




// Scroll trigger animations: 
export const initScrollTriggers = () => {
	
}

<% } %>
