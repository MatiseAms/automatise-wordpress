// Using Smooth Scroll from Lenis https://lenis.studiofreight.com/
<% if (smoothscroll === 'yes') { %>

	import Lenis from '@studio-freight/lenis'
	import {
		gsap
	} from 'gsap'
	
	import {
		ScrollTrigger
	} from 'gsap/ScrollTrigger'
	gsap.registerPlugin(ScrollTrigger)
	
	export let scrollTop = 0
	export let lenisScroll
	export let scrollSpeed = 0
	
	
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
			if (document.querySelector('.home') && window.innerWidth > 1024) {
				if (scroll > window.innerHeight) {
					if (!header.classList.contains('has-background'))
						header.classList.add('has-background')
						header.classList.remove('color--light')
				} else {
					if (header.classList.contains('has-background'))
						header.classList.remove('has-background')
						header.classList.add('color--light')
				}
			} else {
				if (scrollTop > 10) {
					header.classList.add('has-background')
				} else {
					header.classList.remove('has-background')
				}
			}
			const stickyButtons = document.querySelector('.sticky-buttons')
			const formatHeader = document.querySelector('.format-page-header')
			const richButtons = document.querySelector('.rich-text__buttons')
			if (stickyButtons && formatHeader) {
				if (!richButtons) {
					const footer = document.querySelector('.footer')
					if (formatHeader.getBoundingClientRect().y < -10 && footer && footer.getBoundingClientRect().y > window.innerHeight * 1.25) {
						stickyButtons.classList.add('is-active')
					} else if (footer && footer.getBoundingClientRect().y < window.innerHeight) {
						stickyButtons.classList.remove('is-active')
					} else {
						stickyButtons.classList.remove('is-active')
					}
				} else {
					if (formatHeader.getBoundingClientRect().y < -10 && richButtons && richButtons.getBoundingClientRect().y > window.innerHeight) {
						stickyButtons.classList.add('is-active')
					} else if (richButtons && richButtons.getBoundingClientRect().y < window.innerHeight) {
						stickyButtons.classList.remove('is-active')
					} else {
						stickyButtons.classList.remove('is-active')
					}
				}
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
		const homepageHeader = document.querySelector('.homepage-header__slider')
		if (homepageHeader) {
			gsap.to('.homepage-header__text', {
				scrollTrigger: {
					trigger: '.homepage-header',
					start: 'top',
					end: 'bottom',
					scrub: true,
				},
				y: 300
			})
		}
	
		const formatHeader = document.querySelector('.format-page-header')
		if (formatHeader) {
			gsap.to('.header', {
				scrollTrigger: {
					trigger: '.format-page-header',
				start: 'top-=5',
					end: 'top+=10',
					scrub: true,
					toggleClass: {
						targets: '.header',
						className: 'color--light',
					}
				}
			})
		}
		
		const textScrollTitles = [...document.querySelectorAll('.text-scroll-title .clip-container span')]
		if (textScrollTitles.length) {
			textScrollTitles.forEach(textScrollTitle => {
				gsap.to(textScrollTitle, {
					scrollTrigger: {
						trigger: textScrollTitle.closest('.clip-container'),
						start: 'top-=' + window.innerHeight * 0.5,
						end: 'top-=' + window.innerHeight * 0.2,
						scrub: 1,
					},
					y: '-100%'
				})
			})
		}
		
		const clippedMedia = [...document.querySelectorAll('.large-video'), ...document.querySelectorAll('.media-with-marquee')]
		if (clippedMedia.length) {
			clippedMedia.forEach(vid => {
				gsap.to(vid, {
					scrollTrigger: {
						trigger: vid,
						start: window.innerWidth > 1024 ? 'top-=50%' : 'top-='+window.innerHeight * 0.5,
						end: window.innerWidth > 1024 ? 'top-=10%' : 'top-='+window.innerHeight * 0.25,
						scrub: 1,
					},
					'--progress': 0
				})
			})
		}
		
		const scrollSliders = [...document.querySelectorAll('.format-slider'), ...document.querySelectorAll('.text-with-cards__slider')]
		if (scrollSliders.length) {
			scrollSliders.forEach(scrollSlider => {
				gsap.to(scrollSlider, {
					scrollTrigger: {
						trigger: scrollSlider,
						start: 'top-=300',
						end: window.innerWidth < 1024 ? 'bottom-=' + window.innerHeight * 0.8 : 'bottom-=' + window.innerWidth * 0.4,
						scrub: true,
					},
					'--progress': '1'
				})
			})
		}
		
		const hScrollTitle = [...document.querySelectorAll('.partnerships__scroll-title')]
		if (hScrollTitle.length) {
			hScrollTitle.forEach(title => {
				gsap.to(hScrollTitle, {
					scrollTrigger: {
						trigger: title.closest('.partnerships'),
						start: 'top+=' + window.innerHeight * 0.4,
						end: 'bottom-=' + window.innerHeight * 0.4,
						scrub: 1,
						toggleClass: {
							targets: title,
							className: 'is-active'
						}
					},
					'--progress': '1'
				})
			})
		}
		
		const backgroundColorStarts = [...document.querySelectorAll('.js-background-start')]
		if (backgroundColorStarts.length) {
			backgroundColorStarts.forEach(change => {
				const color = change.dataset.colorChange
				gsap.to('body', {
					scrollTrigger: {
						trigger: change,
						start: 'top-=10',
						end: 'bottom',
						scrub: true,
						toggleClass: {
							targets: 'body',
							className: 'background--t' + color
						}
					}
				})	
			})
		}
	
		const body = document.querySelector('body')
		const backgroundColorToggles = [...document.querySelectorAll('.js-background-toggle')]
		if (backgroundColorToggles.length) {
			backgroundColorToggles.forEach(change => {
				const color = change.dataset.colorChange
				gsap.to('body', {
					scrollTrigger: {
						trigger: change,
						start: 'top',
						end: 'bottom',
						scrub: true,
						onToggle: self => {
							if (self.isActive) {
								body.dataset.oldBg = body.dataset.bgColor
								body.dataset.bgColor = color
							} else {
								body.dataset.bgColor = body.dataset.oldBg
							}
						},
					},
					immediateRender: false
				})	
			})
		}
		const backgroundColorChanges = [...document.querySelectorAll('.js-background-change')]
		if (backgroundColorChanges.length) {
			backgroundColorChanges.forEach(change => {
				const color = change.dataset.colorChange
				gsap.to('body', {
					scrollTrigger: {
						trigger: change,
						start: 'top',
						end: 'bottom',
						scrub: true,
						onToggle: self => {
							if (scrollTop / self.end < 0.9) {
								if (self.isActive) {
									body.dataset.oldBg = body.dataset.bgColor
									body.dataset.bgColor = color
								} else {
									body.dataset.bgColor = body.dataset.oldBg
								}
							}
						},
					},
					immediateRender: false
				})	
			})
		}
		const scrollButtons = [...document.querySelectorAll('.js-scroll-button')]
		if (scrollButtons) {
			scrollButtons.forEach(buttonContainer => {
				const target = buttonContainer.dataset.container
				if (target == 'next') {
					const nextElement = buttonContainer.closest('section').nextElementSibling
					if (nextElement) {
						gsap.to(buttonContainer, {
							scrollTrigger: {
								trigger: nextElement,
								start: 'top-=300',
								end: 'bottom-=300',
								scrub: true,
								pin: buttonContainer
							},
							rotate: -360
						})
					}
				}
			})
		}
		const paralaxMedias = [...document.querySelectorAll('.js-parallax-media')]
		if (paralaxMedias) {
			paralaxMedias.forEach(media => {
				gsap.to(media.querySelector('img, video'), {
					scrollTrigger: {
						trigger: media,
						start: 'top-='+window.innerHeight / 2,
						end: 'top+='+window.innerHeight / 2,
						scrub: 1,
					},
					y: 0
				})
			})
		}
		
	}

<% } %>
