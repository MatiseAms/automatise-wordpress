import gsap from 'gsap'

export class TransitionBasic {
  constructor() { }

  out() {
    return new Promise((resolve) => {
      gsap.to('body', {
        duration: 0.4,
        opacity: 0,
        ease: 'Expo.out',
        onComplete: () => {
          resolve()
        }
      })
    })
  }

  in() {
    return new Promise((resolve) => {
      gsap.to('body', {
        duration: 0.4,
        opacity: 1,
        ease: 'Expo.out',
        onComplete: () => {
          resolve()
        }
      })
    })
  }
}
