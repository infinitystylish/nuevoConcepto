
$ = jQuery

if ( $('#galeria').length > 0 ) {
    
    $('document').ready(function() {

        $('.dom-galeria').on('click','.add_image_galeria',function(e) {
            e.preventDefault();
            var this_btn_img = $(this);
            var image = wp.media({
                title: 'Agregar Imagen',
                multiple: false
            }).open()
            .on('select', function(e){
                this_btn_img.prev().remove();
                var file_json_object = (image.state().get('selection').first()).toJSON();
                if(file_json_object.type == 'image') {
                    element_img = "<img class='image-add' src="+file_json_object.sizes.thumbnail.url+" heigh='150' width='150'>";
                    $('.modal-id-image').val(file_json_object.id);
                    $('.modal-url-image').val(file_json_object.sizes.thumbnail.url);

                    if ( $('.id_image_galeria').length > 0 ) {
                        this_btn_img.siblings( ".id_image_galeria" ).val(file_json_object.id);
                    }
                }
              
                this_btn_img.before(element_img);
                

            });
        });

        $('.dom-galeria').on('click','.delete-galeria',function(e) { 
             e.preventDefault();
            id_current = $(this).data('id');
            total_imagenes = $('.total_imagenes').val();
            $( ".galeria" ).each(function( index ) {
                id_div = $(this).data('id');
                if(id_current == id_div) {
                    $(this).remove();
                    total_imagenes = total_imagenes - 1;
                }
            });
            $('.total_imagenes').val(total_imagenes);
        });

        $('.add-new-galeria').on('click', function(event){
            event.preventDefault();
            $('.modal-mask').show();
        });

        $('.cancelar-galeria').on('click', function(event){
            event.preventDefault();
            closeModal();
        });

        var cont = $('.total_imagenes').val();
        $('.galeria-modal').on('click', '.save-galeria', function(event) {
    // qtranslate-fields[testimonioPost][1][description][es]
    // qtranslate-fields[testimonioPost][1][description][en]
    // qtranslate-fields[testimonioPost][1][description][qtranslate-separator]
            event.preventDefault();
            description = $('.modal-description').val();
            author = $('.modal-title').val();
            url_image = $('.modal-url-image').val();
            element_img = "<img class='image-add' src="+url_image+" heigh='150' width='150'>";
            id_image = $('.modal-id-image').val();
            element =  '<div class="galeria" data-id="'+cont+'">' + 
                                '<div class="div-image image-galeria">' +element_img+ 
                                    '<button class="modal-image add_image_galeria" >Agregar Imagen</button>' +
                                    '<input type="hidden" class="custom-translate" name="_galeriaPost['+cont+'][id_image]" value="'+id_image+'" />'+
                                '</div>' +
                                 '<div class="div-title">'+
                                    '<label>Titulo</label>' +
                                    '<input type="text" class="custom-translate" name="_galeriaPost['+cont+'][title]" value="'+author+'" />'+
                                '</div>' +
                                '<div class="div-description">' +
                                    '<label>Descripcion</label>' +
                                    '<textarea class="custom-translate" name="_galeriaPost['+cont+'][description]">'+description+'</textarea>' +
                                '</div>'+
                                '<div class="div-buttons">' +
                                    '<button class="button-secondary delete-galeria" data-id="'+cont+'"> Eliminar </button>' +
                                '</div>' +  
                            '</div>';
            cont = parseInt(cont) + 1;
            $('.galerias').append(element);
            $('.total_imagenes').val(cont);
            $('.modal-description').val('');
            $('.modal-title').val('');
            $('.modal-url-image').val('');
            $('.modal-id-image').val('');
            $('.image-galeria-modal').find('img').remove();
            closeModal();
        });

    });

    function closeModal() {
        $('.modal-mask').hide();
    }
}