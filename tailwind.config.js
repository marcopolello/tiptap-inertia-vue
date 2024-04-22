import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */

const flowbitePlugin = require("flowbite/plugin");

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    "./resources/**/*.js",
    './resources/js/**/*.vue',
    './node_modules/flowbite/**/*.js'
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      typography: ({ theme }) => ({
        DEFAULT: {
          css: {
            '--tw-prose-bullets': theme('colors.pink.500'),
            li: {
              p: {
                margin: 0,
              },
            },
          },
        },
      }),
    },
  },

  plugins: [forms, typography, flowbitePlugin],
}
