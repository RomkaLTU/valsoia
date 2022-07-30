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
          2: '#ffbe53',
        },
        'brown': {
          1: '#6c3622',
          2: '#9d4b19',
          3: '#e2710a',
          4: '#9e4b1a',
        },
        'green': {
          1: '#08a348',
          2: '#c3b93b',
        },
        black: {
          1: '#0d1833',
        },
        gray: {
          1: '#f3f3f3',
        },
        sand: {
          1: '#fdf7dc',
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
