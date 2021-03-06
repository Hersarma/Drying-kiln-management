const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
     content: [    
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",  ],



    theme: {
        scale:{
            '0': '0',
            '25': '.25',
            '50': '.5',
            '75': '.75',
            '90': '.9',
            '95': '.95',
            '100': '1',
            '101': '1.01',
            '105': '1.05',
            '110': '1.1',
            '125': '1.25',
            '150': '1.5',
            '200': '2'
        },
        extend: {
            height: {
                'screen_nav' : '80vh'
            },
            width: {
                '1/7': '14.2857143%',

                '2/7': '28.5714286%',

                '3/7': '42.8571429%',

                '4/7': '57.1428571%',

                '5/7': '71.4285714%',

                '6/7': '85.7142857%',

                '1/8': '12.5%'
            },
            spacing: {
                '84' : '21rem',
                '86' : '22rem',
                '128': '32rem',
                '144': '36rem'
            },
            colors: {
                // Build your palette here
                transparent: 'transparent',
                current: 'currentColor',
                blue_gray: colors.slate,
                gray: colors.gray,
                red: colors.red,
                blue: colors.blue,
                yellow: colors.amber,
                lime: colors.lime,
                cyan: colors.cyan,
                fuchsia: colors.fuchsia,
                teal: colors.teal,
                /*turquoise: {
                    light: '#45c8dc',
                    medium: '#3fb4c6',
                    strong: '#258ba1'
                },*/
                

            },
            animation: {

                'spin-slow': 'spin 3s linear infinite',
                'spin-fast': 'spin 1s linear infinite'
            },
            fontFamily: {
                serif: [],
                sans: ['Roboto'],
                open_sans: ['Open Sans']


}
}
},

variants: {
    extend: {
        zIndex: ['responsive', 'hover'],
        width: ['responsive', 'hover'],
        opacity: ['disabled'],
        borderColor: ['hover,focus, active'],
        borderCollapse: ['hover', 'focus'],
        backgroundColor: ['even', 'odd', 'checked'],
        borderRadius: ['hover', 'focus'],
        filter: ['hover']

    }
},

plugins:
    [
          require('@tailwindcss/custom-forms'),
        
    ]
};
