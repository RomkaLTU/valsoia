module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily: {
      'ga': ['"Glamour Absolute"', 'sans-serif'],
      'comf': ['"Comfortaa"', 'sans-serif'],
    },
    extend: {
      screens: {
        '2xl': '1536px',
      },
      colors: {
        'yellow': {
          1: '#fcaa22',
        },
        'brown': {
          1: '#6c3622',
        },
        'green': {
          1: '#08a348',
        },
        black: {
          1: '#0d1833',
        },
      },
      fontSize: {
        '25px': '1.562rem',
        '45px': '2.812rem',
        '50px': '3.125rem',
        '70px': '4.375rem',
        '155px': '9.687rem',
      },
      lineHeight: {
        '12': '3rem',
        '14': '3.5rem',
      },
    },
  },
  plugins: [],
};
