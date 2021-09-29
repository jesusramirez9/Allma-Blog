function validarCampoInput(campo){
    var band = true;
    if(campo.val().trim().length < 1){
        band = false;
        campo.addClass('is-invalid');
    }else{
        campo.removeClass('is-invalid');
    }
    return band;
}

function validarCampoNumero(campo){
  var band = true;
  if(campo.val().length < 1 || campo.val() <= 0){
      band = false;
      campo.addClass('is-invalid');
  }else{
      campo.removeClass('is-invalid');
  }
  return band;
}

function validarCampoSelect(campo){
    var band = true;
    if(campo.val() == 0){
        band = false;
        campo.addClass('is-invalid');
    }else{
        campo.removeClass('is-invalid');
    }
    return band;
}

function validarCampoCheck(nombre){
    var band = true;
    if($('input[name="'+nombre+'"]:checked').val() == null){
        band = false;
        $('input[name="'+nombre+'"]').addClass('is-invalid');
    }else{
        $('input[name="'+nombre+'"]').removeClass('is-invalid');
    }
    return band;
}

function validarCorreo(campo){
    var band = true;
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    if (caract.test(campo.val()) == false){
        campo.addClass('is-invalid');
        band = false;
    }else{
        campo.removeClass('is-invalid');
    }
    return band;
}

function bloquearPantalla(){
    $.blockUI({
        message: '<i class="fas fa-spin fa-sync text-white"></i>',
        overlayCSS: {
            backgroundColor: '#000',
            opacity: 0.5,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
}

$(document).on('input', '.input-number', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

//Card de guia
$('.btn-infoTuto').on('click', function(){
  $(this).parents('.card-tuto').toggleClass('active');
  if($('.card-tuto').hasClass('active')){
    $('i',this).removeClass('mdi-arrow-right-bold').addClass('mdi-arrow-left-bold');
  }else{
    $('i',this).removeClass('mdi-arrow-left-bold').addClass('mdi-arrow-right-bold');
  }
});

$(document).on('click', '.btn-finish', function(){
  $('.card-tuto').removeClass('active');
  $(this).text('Siguiente').removeClass('btn-finish');
  $('#carouselCardTuto').carousel(0);
});

$('#carouselCardTuto').on('slid.bs.carousel', function () {
  var total = $('.carousel-indicators li', this).length - 1;
  if($('.carousel-indicators .active', this).attr('data-slide-to') == total){
    $('.btn-next', this).text('Terminar');
    $('.btn-next', this).addClass('btn-finish');
  }else{
    $('.btn-next', this).text('Siguiente');
  }
});

$('#carouselCardTutoHome').on('slide.bs.carousel', function (e) {
  var total = $('.carousel-indicators li', this).length - 1;
  if(e.to == 0){
    $('.guia-prev').attr('data-row', 'false');
  }else{
    $('.guia-prev').attr('data-row', 'true');
  }
  if(e.to == total){
    $('.guia-next').attr('data-row', 'false');
  }else{
    $('.guia-next').attr('data-row', 'true');
  }
});