/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        ],
    theme: {
        colors: {
            'main': "#4D15F4",
            'light': "#EDECF0",
            'dark': "#0B0326",
            'primary': "#145EEE",
            'success': "#0FE156",
            'danger': "#EA0D42",
            'warning': "#F4C315",
            'info': "#31BAF4",
        },
        extend: {},
    },
    plugins: [],
}
