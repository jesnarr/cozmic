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
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        backgroundColor: [
            "hover",
            "focus",
            "active",
            "odd",
        ],
        display: ["responsive", "dark"],
        textColor: [
            "focus-within",
            "hover",
            "active",
        ],
        placeholderColor: ["focus"],
        borderColor: ["focus", "hover"],
        boxShadow: ["active", "focus"],
        ringColor: ["focus"],
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
