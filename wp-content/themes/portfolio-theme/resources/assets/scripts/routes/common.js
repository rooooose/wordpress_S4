export default {
  init() {
    // JavaScript to be fired on all pages
    this.initEls();
	this.initEvents();
  },

  initEls () {
      this.$els = {
      square_prog: $('div.rea_square_prog'),
      square_art: $('div.rea_square_art'),
      rea_content: $('div.rea_content'),
      popup_prog: $('div.popup_prog'),
      popup_art: $('div.popup_art'),
      cross_prog: $('img.cross_prog'),
      cross_art: $('img.cross_art'),
    };
  },

  initEvents() {

      this.$els.square_prog.on('click', ({currentTarget}) => {

         let name = $(currentTarget).attr('data-name');
         
         $('div.rea_content[data-name="'+name+'"]').addClass('active');
         this.$els.popup_prog.addClass('active');

         this.$els.rea_content.not('[data-name="'+name+'"]').removeClass('active');
         this.$els.popup_art.removeClass('active');
      });

      this.$els.square_art.on('click', ({currentTarget}) => {

         let name = $(currentTarget).attr('data-name');
         
         $('div.rea_content[data-name="'+name+'"]').addClass('active');
         this.$els.popup_art.addClass('active');

         this.$els.rea_content.not('[data-name="'+name+'"]').removeClass('active');
         this.$els.popup_prog.removeClass('active');
      });


      this.$els.cross_prog.on('click', () => {
         
         this.$els.popup_prog.removeClass('active');

         this.$els.rea_content.removeClass('active');
      });


      this.$els.cross_art.on('click', () => {
         
         this.$els.popup_art.removeClass('active');

         this.$els.rea_content.removeClass('active');
      });


	
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
