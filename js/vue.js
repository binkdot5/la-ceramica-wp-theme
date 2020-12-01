Vue.component('carousel', {
  props: ['interval', 'value'],
  template: `<div> <slot> </slot> </div>`,
});

Vue.component('carousel-slide', {
  props: ['imgSrc', 'alt'],
  template: `<div class="carousel-item">
                <img class="col1-img" :src="imgSrc" :alt="alt" />
            </div>`
});

var app = new Vue({
    el: '#app',
    data: {
      message: 'LaCeramica Group'
    }
  });