/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    
  ],
  theme: {
    cotainer:{
      center: true,
      padding: '16px',
  },
  extend: {
    colors: {
      primary: '#3F979B',
      secondary:'#64748b',
      dark:'#0f172a',
    }
  },
  // screens: {
  //     '2xl': '1320px',
  // }
  },
  plugins: [],
}