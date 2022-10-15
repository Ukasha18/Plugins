
jQuery(document).ready(function($){ 
    $("#keyword").on("keyup",function(){
        var keyword = $(this).val();
        // alert(keyword);
        jQuery.ajax({
            url:   ajax_object.ajaxurl,
            type: 'POST',
            data: { 
                action: 'cpf_searching_data_cpt_students',  
                keyword: keyword
            },
            success: function(data) {
                jQuery('#datafetch').html( data );
            }
        });
    });
});
