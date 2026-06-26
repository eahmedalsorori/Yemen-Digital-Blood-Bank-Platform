/*global $, alart, console */
$(function(){
    'use selrict';
    $('fullName').blur(function (){
        if($(this).val().length <4){
            // console.log('Tins Field Need 3 characteres');
            $(this).parent().find('.error-name').fadeIn(300); 
        }

    })


})
