# Lothliel WP Theme Boilerplate

On the project assets/ folder type in the terminal:
```bash
npm install
```

Then, once all the dependencies are installed, run:
```bash
npx mix watch
```

This is going to tell Laravel Mix to watch for changes on the tailwind and js files, and it´ll bundle (and rebundle) them into the dist folder...

As it is right now it's only wathching for `index.js` and `index.css`, when needed, add extra files you want Mix to watch by adding, for instance:
```javascript
// For Js and Tailwindcss
mix.js('src/js/index.js', 'dist/js')
    .postCss('src/css/index.css', 'dist/css', [
        require("tailwindcss"),
]);

// To load sass files (if needed)
 mix.sass('src/sass/main.scss', 'dist/css')
```

For more info on Laravel Mix, refer to its [docs](https://laravel-mix.com/) page
