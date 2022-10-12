/** @type {import('tailwindcss').Config} */
module.exports = {
    mode : "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                'fade-in-down': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    },
                }
            },
            animation: {
                'fade-in-down': 'fade-in-down 0.5s ease-out'
            },
            colors: {
                'side': '#001B43',
                'side-bright': '#233A5C',
                'blue-kominfo' : '#0100CC'
            }
        },
    },
    variants: {},
    plugins: [],
}