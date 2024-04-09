/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            c_light: "#EEEDEB",
            c_black: "#191919",
            c_dark: "#272829",
            c_red: "#C70039",
            c_yellow: "#FFC700",
            c_blue: "#008DDA",
        },
    },
    plugins: [

    ],
};
