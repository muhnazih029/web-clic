/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"
  ],
  theme: {
    fontFamily: {
      'sans': ['Montserrat', 'ui-sans-serif', 'system-ui'],
    },
    extend: {
      colors: {
        primary: "#F37E1F",
        secondary: "#342C2A",
        teritary: "#E0DDE8",
        neutral: "#fff"
      }
    }
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.hide-scrollbar': {
          /* Hide scrollbar for Chrome, Safari and Opera */
          '&::-webkit-scrollbar': {
            display: 'none',
          },
          /* Hide scrollbar for IE, Edge and Firefox */
          '-ms-overflow-style': 'none',  /* IE and Edge */
          'scrollbar-width': 'none',  /* Firefox */
        },
      })
    },
  ]
};
