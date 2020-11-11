let chk = $('input[type="checkbox"]');
chk.each(function(){
    var v = $(this).attr('checked') == 'checked'?1:0;
    $(this).after('<input type="hidden" name="'+$(this).attr('rel')+'" value="'+v+'" />');
});

chk.change(function(){
    var v = $(this).is(':checked')?1:0;
    $(this).next('input[type="hidden"]').val(v);
});


