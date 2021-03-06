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
            
            backgroundImage: {
                'fondo-home': "url('/img/fondo.jpg')",
                'fondo-home-logo': "url('/img/logo_beezper_home.png')",
                'fondo-home-registrate': "url('/img/icono_registrate.png')",
                'fondo-home-elegir': "url('/img/icono_elegir.png')",
                'fondo-home-invierte': "url('/img/icono_invierte.png')",
                'fondo-home-gana': "url('/img/icono_gana.png')",
                'fondo-home-footer': "url('/img/logo_beezper_blanco.png')",
              },
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
            'melon':'#ffe4e1',
          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
