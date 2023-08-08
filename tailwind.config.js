import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        colors: {
          'primary-color': '#0062FF',
          'textgray': '#92929D',
          'linegray': '#F1F1F5',
          'secondary-gray':'#E2E2EA',
          'text-h2-gray': '#171725',
          'color-posts': '#44444F',
          'color-input': '#FAFAFB'
          
          
        },
        },
    },

    plugins: [forms],
};
