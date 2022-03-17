const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'quick' : ['Quicksand']
            },
        },
        colors: {
            'blue': {
                300:'#44B5E3',
                400:'#3EC4DC',
                500:'#609DB0',
            },
            'pink': '#ff49db',
            'orange': '#ff7849',
            'green': '#13ce66',
            'gray-dark': '#273444',
            'gray': '#8492a6',
            'gray-light': '#d3dce6',
            'black':'#000',
            'white':'#fff',
            'red':{
                300:'#E90000',
                400:'#C7272C',
                500:'#E90000',
            },
            'purple':{
                200:'#5C7BFF',
                300:'#568AF8',
                400:'#5098F1',
                500:'#4AA7EA',
            },
          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
