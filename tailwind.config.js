import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: "#FEB20E",
                    hover: "#FFD271",
                    active: "#DF9800",
                },
                danger: {
                    DEFAULT: "#F43518",
                    hover: "#FF634B",
                    active: "#B71800",
                },
                gray: {
                    200: "#F9F9F9",
                    300: "#BFBFBF",
                    400: "#9B9B9B",
                    500: "#777676",
                    600: "#535252",
                    700: "#2F2E2E",
                },
            },
        },
    },

    plugins: [forms],
};
