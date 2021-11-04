const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: ['./src//index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        primary: "#da3742",
        secondary: "rgba(41, 41, 41, 1) ",
        dark: "hsl(240, 84%, 4%)",
        lessdark: "rgba(41, 41, 41, 1)",
        offWhite: "#hsla(0,	0%,	98.04%,	1)",
        links: "hsla(216, 15%, 90%, 0.9)",
        
      },
      backgroundImage: {
             'hero-bergen': "url('assets/img/bergen.jpeg')",
        // +         'footer-texture': "url('/img/footer-texture.png')",
                }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}