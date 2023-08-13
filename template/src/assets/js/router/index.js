import Swup from 'swup'
import SwupBodyClassPlugin from '@swup/body-class-plugin'
import SwupJsPlugin from '@swup/js-plugin'
import SwupPreloadPlugin from '@swup/preload-plugin'
import SwupScriptsPlugin from '@swup/scripts-plugin'

import { options } from './options'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { initPage } from '../index.js'
// import { toggleNav } from '../elements/header'

export let swup

export const initRouter = () => {
  swup = new Swup({
    animateHistoryBrowsing: false,
    animationSelector: '[class*="app-transition-"]',
    containers: ['#main'],
    cache: true,
    linkSelector: `a[href^="${window.location.origin}"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="./"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])`,
    plugins: [
      new SwupBodyClassPlugin(),
      new SwupJsPlugin(options),
      new SwupPreloadPlugin(),
      // new SwupProgressPlugin(),
      new SwupScriptsPlugin({
        optin: true,
      }),
    ],
    skipPopStateHandling: function (event) {
      if (event.state && event.state.source == 'swup') {
        return false
      }
      return true
    },
  })

  swup.hooks.on('animation:out:start', function () {
    const header = document.querySelector('.header.is-open')
			if (header) {
				// toggleNav(header)
			}
  })

  swup.hooks.on('animation:out:end', function () {
    // Kill all scrolltriggers when out animation is done
    ScrollTrigger.killAll()
  })

  swup.hooks.on('content:replace', function () {
    window.scrollTo(0, 0)
    initPage()
  })
}
