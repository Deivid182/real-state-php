document.addEventListener('DOMContentLoaded', () => {
  eventListeners()

  darkMode()
})

const eventListeners = () => {
  const mobileMenu = document.querySelector('.mobile-menu')

  mobileMenu.addEventListener('click', responsiveNavigation)
}

const responsiveNavigation = () => {
  const navigation = document.querySelector('.navigation')

  navigation.classList.toggle('show')
}

const darkMode = () => {

  const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)')

  if (isDarkMode.matches) {
    document.body.classList.add('dark')
  } else {
    document.body.classList.remove('dark')
  }

  isDarkMode.addEventListener('change', (event) => {
    if (isDarkMode.matches) {
      document.body.classList.add('dark')
    } else {
      document.body.classList.remove('dark')
    }   
  })

  const darkModeBtn = document.querySelector('.dark-mode-btn')

  darkModeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark')
  })
}