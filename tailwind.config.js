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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                pacifico:['Pacifico', 'cursive']
            },
            keyframes: {
                scroll: {
                  '0%': { transform: 'translateX(0)' },
                  '100%': { transform: 'translateX(-100%)' },
                },
            },
            animation: {
                'spin-slow': 'spin 3s linear infinite',
                scroll: 'scroll 20s linear infinite',
            },
            backgroundImage: {
                'conic-gradient': 'conic-gradient(var(--tw-gradient-stops))',
            },
        },
    },

    plugins: [forms],
};
