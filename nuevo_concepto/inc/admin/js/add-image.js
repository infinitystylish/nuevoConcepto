// $ = jQuery;

jQuery(document).ready(function($) {
	// console.log(class_input_id);
	if (typeof(class_input_id) !== 'undefined') {

		class_input = class_input_id.class_input_id;
		$('.add_image').click(function(e) {
	        e.preventDefault();
	        var this_btn_img = $(this);
	        var classInput = $(this).data('id');
	        var image = wp.media({
	            title: 'Agregar Imagen',
	            multiple: false
	        }).open()
	        .on('select', function(e){
	            this_btn_img.prev().remove();
	            var file_json_object = (image.state().get('selection').first()).toJSON();
	            console.log(file_json_object);
	            if(file_json_object.type == 'image')
	            	element_img = "<img class='image-add' src="+file_json_object.sizes.thumbnail.url+" heigh='150' width='150'>";
	            else 
	            	element_img = "<img class='image-add' src="+file_json_object.icon+" heigh='64' width='48'>";

	            this_btn_img.before(element_img);
	            $('.'+classInput).val(file_json_object.id);

	        });
	    });
	    
	}

	if ( $('.type_document').length > 0 ) {

		$('.type_document').click(function(e) {
	        e.preventDefault();
	        var selected = $(".type_document:checked");
			if (selected.length > 0) {
			    selectedVal = selected.val();
			}
			// console.log(selectedVal);
	        var this_btn_img = $('.document');
	        var image = wp.media({
	            title: 'Agregar Documento',
	            multiple: false
	        }).open()
	        .on('select', function(e) {
	            this_btn_img.next().remove();
	            var file_json_object = (image.state().get('selection').first()).toJSON();
	            console.log(file_json_object);
	            element_img = '';
	            if(file_json_object.type == 'image' && selectedVal == 'foto')
	            	element_img = "<div><img class='image-add' src="+file_json_object.sizes.thumbnail.url+" heigh='150' width='150'><label>"+file_json_object.title+"</label></div>";
	            else if(file_json_object.subtype == 'pdf' && selectedVal == 'pdf')
	            	element_img = "<div><img class='image-add' src="+file_json_object.icon+" heigh='64' width='48'><label>"+file_json_object.title+"</label></div>";
	            else if(file_json_object.type == 'video' && selectedVal == 'video')
	            	element_img = "<div><img class='image-add' src="+file_json_object.icon+" heigh='64' width='48'><label>"+file_json_object.title+"</label></div>";

	            if(element_img != '') {
	            	this_btn_img.after(element_img);
	            	$('.id_type_document').val(file_json_object.id);
	            	$(".type_document[name=_type_document][value=" + selectedVal + "]").prop('checked', true);
	            } else {
	            	alert('Error. Favor de checar el tipo de documento.');
	            	$(".type_document").prop('checked', false);
	            	return false;
	            }

	        });
	    });

	}

});