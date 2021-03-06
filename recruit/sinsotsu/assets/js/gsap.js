'use strict';
gsap.set('.view-up', {autoAlpha: 0, y:50});
var elems = document.getElementsByClassName('view-up');
for (let i = 0; i < elems.length; i++) {
  gsap.to(elems[i], {
    delay: 0.25,
    duration: 1,
    autoAlpha: 1,
    y: 0,
      scrollTrigger: {
        trigger: elems[i],
      }
  });
}