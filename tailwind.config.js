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
        'primaryColor': '#113f67',
        'secondaryColor' : '#226597',
        'thirdColor' : '#87c0cd',
        'textColor' : '#F3F9FB'

      }
    },
    plugins: [],
  }