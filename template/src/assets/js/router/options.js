import { transitionBasic } from '../index'

export const options = [
  {
    from: '(.*)',
    to: '(.*)',
    out: (next) => {
      transitionBasic.out().then(next)
    },
    in: (next) => {
      transitionBasic.in().then(next)
    },
  },
]
