jQuery(document).ready(function($){"use strict";if($('form[name="frmcontact"], form[name="frmdonate"]').length){$('form[name="frmcontact"], form[name="frmdonate"]').each(function(){$(this).submit(function(){var This=$(this);if($(This).valid()){var action=$(This).attr('action');var data_value=unescape($(This).serialize());$.ajax({type:"POST",url:action,data:data_value,error:function(xhr,status,error){confirm('The page save failed.');},success:function(response){This.prev('.ajax_contact_msg').html(response);This.prev('.ajax_contact_msg').slideDown('slow');if(response.match('success')!==null)$(This).slideUp('slow');}});}
return false;});$(this).validate({rules:{txtname:{required:true},txtemail:{required:true,email:true}},errorPlacement:function(error,element){}});});}});