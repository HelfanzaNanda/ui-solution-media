module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/.js",
        "./resources/**/.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {},
    variants: {
        extend: {
            backgroundColor: ["active"],
            backgroundOpacity: ["active"],
            textColor: ["active"]
        }
    },
    plugins: []
};
