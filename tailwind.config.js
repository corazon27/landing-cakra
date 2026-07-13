/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // Penempatan keyframes dan animation harus di dalam extend
      keyframes: {
        'bounce-slow': {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-15px)' },
        }
      },
      animation: {
        // '3s' adalah durasi, 'infinite' agar terus menerus
        'bounce-slow': 'bounce-slow 3s infinite ease-in-out',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}