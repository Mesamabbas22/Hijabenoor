$(".owl-carousel").owlCarousel({
  items:4,
  nav: true,
  navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
  margin: 20,
  responsive:{
    768:{
      items: 4
    },
    425:{
      items:2
    },
    0:{
      items: 1
    }
  }
});
  $(window).scroll(function(){
    let scroll = $(this).scrollTop();
    if(scroll > 320){
      $('#navbar').css('position','fixed')
      $('#navbar').css('top','0')
      $('#navbar').css('width','100%')
      $('#navbar').css('z-index','999')
      $('#navbar').css('box-shadow','rgba(149, 157, 165, 0.2) 0px 8px 24px')
      $('#navbar').addClass('fadeInDown')
      $('.back-top').css('display','block')
    }else{
      $('.back-top').css('display','none')
      $('#navbar').removeClass('fadeInDown')
      $('#navbar').css('position','static')
      $('#navbar').css('top','unset')
      $('#navbar').css('width','100%')
      $('#navbar').css('z-index','unset')
      $('#navbar').css('box-shadow','unset')
    }
  })
  let min = $('#min');
  let max = $('#max');
  min.html($('#range-min').val())
  max.html($('#range-max').val())
  let minVal = ''
  let prograss = $('.slider-range .slider .progress')
  $('#range-min').on('change mousemove',function(){
    minVal = $(this).val()
    minFload = minVal / 10;
    var widthCal = $('#range-max').val() /10;
    prograss.css('left',minFload+'%')
    prograss.css('width',widthCal - minFload+'%')
    min.html($(this).val())
    // if(minVal == widthCal){

    // }
    console.log(this.step)
    // min.html($(this).val())
  })
  $('#range-max').on('change mousemove',function(){
    let widthCal = $(this).val() / 10;
    var leftCal = $('#range-min').val() /10;
    prograss.css('width',widthCal - leftCal+'%')
    prograss.css('left',leftCal+'%')
    // prograss.css('ri   ght',value.replace('-','')+'%')
    max.html($(this).val())
  })
  // $.each($('.theme-checkbox'),function(key,values){
  //   $(values).change(function(){
  //     if(values.checked){
  //       console.log(values)
  //     }
  //   })
  // })

  // console.log($('.theme-checkbox'))
  $('.theme-checkbox').change(function(){
    let chackmark = $(this).siblings('.checkmark');
    if(this.checked){
      // console.log($(this).val())
      $(chackmark).css('background-color','red')
      $(chackmark).css('color','white')
      $(chackmark).html(`<i class="fas fa-check"></i>`)
    }else{

      $(chackmark).css('background-color','white')
      $(chackmark).html('')
    }
  })
  $('.size-label input[type=radio]').change(function(){
    let sizeButton = $(this).siblings('.size-button');
    let col = $(this).parent().parent();
    let siblings = col.siblings().children().children('.size-button')
    console.log()
    if(this.checked){
      $(siblings).css('background-color','#f0f2f8')
      $(sizeButton).css('background-color','red')
      $(sizeButton).css('color','white')
      $(siblings).css('color','black')
    }else{
      $(sizeButton).css('background-color','white')
      $(sizeButton).css('color','black')
    }
  })
  $('.theme-radio').change(function(){
    let radio = $(this).siblings('.radio');
    let siblingRadio = $(this).parent().siblings('.payment').children('.radio');
    if(this.checked){
      $(radio).css('background-color','red')
      $(radio).css('color','white')
      $(radio).html(`<i class="fas fa-check"></i>`)
      $(siblingRadio).css('background-color','white')
      $(siblingRadio).html('')
    }
  })
  $('.back-top').click(function(){
    $('html, body').animate({
      scrollTop: 0
    },500);
  })