<% if (locomotive === 'yes') { %>

import Highway from '@dogstudio/highway'
import gsap from 'gsap'
import { locoScroll } from '../base/scroll.js'

import { initPage } from '../index.js'

class TransitionRouter extends Highway.Transition {
	out ({ from, trigger, done }) {
		gsap.fromTo('body', 0.4,
		{
			opacity: 1,
		},
		{
			opacity: 0,
			ease: 'Expo.out',
			onComplete: () => {
				done()
			}
		})
	}
	in ({ from, to, done }) {
		window.scrollTo(0, 0)
		from.remove()
		initPage()
		const body = document.querySelector('body')
		body.classList = document.querySelector('[data-router-view]').classList
		gsap.fromTo('body', 0.6,
			{
				opacity: 0,
			},
			{
				opacity: 1,
				ease: 'Expo.out',
				onComplete: () => {
					done()
				}
			},
		)
	}
}

export default TransitionRouter
<% } %>
