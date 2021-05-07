import imagemin from 'imagemin' ;
import imageminWebp from 'imagemin-webp';


imagemin(['images/*.{jpg,png}'], {
  destination:  'webp/',
  plugins: [
    imageminWebp({
      quality: 100,
      resize: {
        width: 0,
        height: 0
      }
    })
  ]
}).then(() => {
  console.log('Images optimized');
});