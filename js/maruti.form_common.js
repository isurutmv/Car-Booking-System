$(document).ready(function(){  
        $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd' 
              });   
$(document).ready(function(){
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
    $('.colorpicker').colorpicker();
    $('.datepicker').datepicker();
});
