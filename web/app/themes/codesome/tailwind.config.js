module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily: {
      'ga': ['"Glamour Absolute"', 'sans-serif'],
      'comf': ['"Comfortaa"', 'sans-serif'],
    },
    extend: {
      colors: {
        'yellow': {
          1: '#fcaa22',
        }
      },
    },
  },
  plugins: [],
};
