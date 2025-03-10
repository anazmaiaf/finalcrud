import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      colors: {
        primary: '#ce7e5d', 
        secondary: '#a2543d',
        peach: '#d39a89',
        coral: 'f7d1ba',
        olive: '557570',
        icemint: 'd6dcd8',
      },
      
      // Adicionando fontes personalizadas
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
    },
  },

  darkMode: "class",
  plugins: [forms],
};
