import gsap from 'gsap'
let mm = gsap.matchMedia()
import { lenisScroll } from '../../base/scroll'
import { pageTransitionDuration } from '../../elements/brands'

export class TransitionBasic {
  constructor() { }

  out() {
    return new Promise((resolve) => {
      const pageTransition = document.querySelector('.page-transition')
      gsap.to('body', {
        duration: pageTransitionDuration,
        ease: 'Expo.out',
        onComplete: () => {
          mm.add('(prefers-reduced-motion)', () => {
            gsap.to(pageTransition, {
              '--opacity': 1,
              onComplete: resolve
            })
          })
          const amount = 1
          mm.add('(prefers-reduced-motion: no-preference)', () => {
            const tl = gsap.timeline()
            tl.set(pageTransition, {
              '--opacity': 1
            })
            tl.set(pageTransition, {
              clipPath: 'inset(0% 100% 0% 0%)',
            })
            if (pageTransitionDuration > 0.5) {
              pageTransition.classList.add('hide')
            } else {
              pageTransition.classList.remove('hide')
            }
            tl.to(pageTransition, {
              clipPath: pageTransitionDuration < 0.5 ? 'inset(0% 0% 0% 0%)' : '',
              onComplete: () => {
                resolve()
              }
            })
          })
        }
      })
    })
  }

  in() {
    return new Promise((resolve) => {
      const pageTransition = document.querySelector('.page-transition')
      mm.add('(prefers-reduced-motion)', () => {
        gsap.to(pageTransition, {
          '--opacity': 0,
          duration: 0.6,
          onComplete: resolve
        })
      })
      const amount = 0
      mm.add('(prefers-reduced-motion: no-preference)', () => {
        const tl = gsap.timeline()
        resolve()
        tl.set(pageTransition, {
          '--opacity': 1
        })
        tl.set(pageTransition, {
          clipPath: 'inset(0% 0% 0% 0%)',
        })
        tl.to(pageTransition, {
          clipPath: pageTransitionDuration < 0.5 ? 'inset(0% 0% 0% 100%)' : '',
          duration: 0.4,
          delay: 0.2, 
          onComplete: () => {
            if (pageTransitionDuration < 0.5) {
              lenisScroll.start()
              document.querySelector('body').classList.remove('hide-overflow')
            }
            gsap.set('.fake-brand-header', {
              opacity: 0,
              onComplete: () => {
                document.querySelector('.fake-brand-header').innerHTML = ''
              }
            })
          }
        })
      })
    })
  }
}
