/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        bg: '#0f172a',
        text: '#e5e7eb',
        muted: '#9ca3af',
        border: '#1f2937',
        accent: '#f97316',
        'accent-light': '#fed7aa',
        'bg-card': '#111827',
      },
    },
  },
  plugins: [],
}