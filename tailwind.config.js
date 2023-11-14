/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        background: '#0A1B34',
        primary: '#FF009D',
        secondary: '#B00000'
      }
    },
  },
  plugins: [require("daisyui")],
}

