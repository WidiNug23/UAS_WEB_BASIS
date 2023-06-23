const SignUpButton = document.getElementById('SignUp');
const SignInButton = document.getElementById('SignIn');
const Main = document.getElementById('main');

SignUpButton.addEventListener('click', () => {
    Main.classList.add("right-panel-active");
})

SignInButton.addEventListener('click', () => {
    Main.classList.remove("right-panel-active");
})

/*====== DARK LIGHT THEME1 ======*/
const themeButton1 = document.getElementById('theme-button1')
const darkTheme1 = 'dark-theme'
const iconTheme1 = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme1 = localStorage.getItem('selected-theme1')
const selectedIcon1 = localStorage.getItem('selected-icon1')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme1 = () => document.body.classList.contains(darkTheme1) ? 'dark' : 'light'
const getCurrentIcon1 = () => themeButton1.classList.contains(iconTheme1) ? 'bx bx-moon' : 'bx bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme1) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme1 === 'dark' ? 'add' : 'remove'](darkTheme1)
  themeButton1.classList[selectedIcon1 === 'bx bx-moon' ? 'add' : 'remove'](iconTheme1)
}

// Activate / deactivate the theme manually with the button
themeButton1.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme1)
    themeButton1.classList.toggle(iconTheme1)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme1', getCurrentTheme1())
    localStorage.setItem('selected-icon1', getCurrentIcon1())
})
