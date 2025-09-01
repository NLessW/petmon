import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                sans: ["Pretendard", ...defaultTheme.fontFamily.sans],
                spoqa: "Spoqa Han Sans",
                NanumSquareNeo: "NanumSquareNeo",
            },
            colors: {
                ...colors,
            },
        },
        colors: {
            // primary: "#26405B",
            primary: "#2974BC",
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
