const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');
imagemin(['img/*.{jpg,png}'], {
  destination: __dirname + '/webp/',
  plugins: [
    imageminWebp({
      quality: 50,
      resize: {
        width: 0,
        height: 0
      }
    })
  ]
}).then(() => {
  console.log('Images optimized');
});