console.log('all done sir');

// Flickity
const Flickity = require('flickity'); 

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true
});