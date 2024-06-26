/** @type {import('tailwindcss').Config} */

module.exports = {
    content: ["../**/*.{html,php,js}"],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
}

