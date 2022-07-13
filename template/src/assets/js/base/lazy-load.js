export const initLazyLoad = () => {
  const lazyLoadItems = [...document.querySelectorAll('[data-lazy-load]')]
  if (lazyLoadItems) {
    lazyLoadItems.forEach(item => {
      lazyLoad.observe(item)
    })
  }
}

const lazyLoad = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const lazyMedia = entry.target
      lazyMedia.src = lazyMedia.dataset.src
      lazyMedia.addEventListener('load', () => {
        lazyMedia.classList.add('is-loaded')
      })
      lazyMedia.addEventListener('loadedmetadata', () => {
        lazyMedia.classList.add('is-loaded')
      })
      lazyLoad.unobserve(entry.target)
    }
  })
}, {
  rootMargin: '500px'
})
