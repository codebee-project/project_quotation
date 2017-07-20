$(document).ready(function() {
    function email () {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $("#add-email"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
           $(wrapper).append('<div class="col-md-12 dis-inblock no-padding-lr mr-div-gen"><input id="email_'+x+'" type="email" class="form-control dis-inblock control-input" id="exampleInputEmail1" placeholder="Please enter email address"><i id="close-email" class="fa fa-times control-icon-close control-pd-icon-close"></i></div>');
        }
    });
    
    $(wrapper).on("click","#close-email", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
    }

    function telephone () {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_field_wrap"); //Fields wrapper
    var add_button      = $("#add-tel"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
           $(wrapper).append('<div class="col-md-12 dis-inblock no-padding-lr mr-div-gen"><input id="email_'+x+'" type="Telephone" class="form-control dis-inblock control-input" id="exampleInputTel1" placeholder="Please enter telephone number"><i id="close-tel" class="fa fa-times control-icon-close control-pd-icon-close"></i></div>');
        }
    });
    
    $(wrapper).on("click","#close-tel", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
    }

    /*-------------------------------call function-----------------------------*/
    email();
    telephone();

});