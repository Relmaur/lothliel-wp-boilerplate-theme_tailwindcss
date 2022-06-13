/** @type {import('tailwindcss').Config} */
module.exports = {
  /* fast-glob is used to prevent the endless build loop we get from npx mix watch...
   More on that here https://tips.dev/tailwind-css/how-to-fix-laravel-mix-and-tailwind-infinite-loop/ */
  content: require('fast-glob').sync([
    "../*.php",
  ]),
  theme: {
    fontFamily: {
      'sans': ['Montserrat', 'Helvetica', 'Arial'] 
    }, 
    extend: {
      keyframes: {
        grow: {
          'from': { width: '0%' },
          'to': { width: '100%'},
        }
      },
      animation: {
        grow: 'grow 200ms ease-in-out forwards',
      },
    },
  },
  plugins: [],
}
