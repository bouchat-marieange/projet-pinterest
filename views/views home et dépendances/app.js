// external js: masonry.pkgd.js
// var elem = document.querySelector('.grid');
// var msnry = new Masonry( elem, {
//   // options
//   itemSelector: '.grid-item',
//   columnWidth: 200
// });
//
// // element argument can be a selector string
// //   for an individual element
// var msnry = new Masonry( '.grid', {
//   // options
// });

var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
