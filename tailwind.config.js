/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"
  ],
  theme: {
    fontFamily: {
      'sans': ['Montserrat', 'ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Georgia'],
      'mono': ['ui-monospace', 'SFMono-Regular'],
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
  plugins: []
};
