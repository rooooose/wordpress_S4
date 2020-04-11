export default {
  init() {
    // JavaScript to be fired on all pages
    this.initEls();
	this.initEvents();
  },

  initEls () {
      this.$els = {
      square: $('div.rea_square'),
      rea_content: $('div.rea_content'),
      //title: $('h2.title'),
    };
  },

  initEvents() {

      this.$els.square.on('click', ({currentTarget}) => {

         let name = $(currentTarget).attr('data-name');
         
         $('div.rea_content[data-name="'+name+'"]').addClass('active');

         this.$els.rea_content.not('[data-name="'+name+'"]').removeClass('active');
      });
	
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
