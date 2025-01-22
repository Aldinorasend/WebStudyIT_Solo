/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      colors: {
        transparent: 'transparent',
        'sideBarLight': '#F8F9FA',
        'titleColorLight' : '#003366',
        'hoverLight' : '#E1E8ED',
        'activeLight' : '#0066CC',
        'textColorLight' : '#001F3F'

      }
    },
    plugins: [],
  }