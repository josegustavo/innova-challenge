module.exports = {
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'roboto': ['Roboto'],
            'open-sans-condensed': ['Open Sans Condensed'],
            'open-sans': ['Open Sans'],
        },
        zIndex: {
            '-2': '-2',
            '-1': '-1',
        },
        colors : {
            'primary' : {
                20: '#fff8f8',
                30: '#ffe6e4',
                40: '#ffd3d1',
                50: '#ffc1bd',
                100: '#ffaea9',
                200: '#ff9c96',
                300: '#ff8982',
                400: '#ff776e',
                500: '#ff645b',
                600: '#ff5247',
                700: '#ff3f34',
                800: '#ff2d20',
                900: '#ff1b0c',
            }
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
