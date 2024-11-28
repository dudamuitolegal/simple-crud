import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sf-pro': ['sfpro', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'red': '#FB0808',
            },
            backgroundColor: {
               'bg-button': '#3D3D3D'
            },
        },
    },
    plugins: [],
};
