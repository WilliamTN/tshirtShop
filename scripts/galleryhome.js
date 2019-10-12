
function startGallery() {
var homepage3 = new gallery($('homepage3'), {
timed: true,
delay: 3000,
showInfopane: false,
showArrows: false,
showCarousel: false
});
}
window.addEvent('domready', startGallery);