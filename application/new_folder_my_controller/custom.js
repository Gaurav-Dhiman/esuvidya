/**
 * Created by akjoshi on 30-09-2015.
 */
$('document').ready(function(){
    $('#std').on('change blur', function(){
        $('#streams').attr('disabled',false);
        fillStream($(this));
    });

    $('#streams').on('change blur', function(){
        $('#divisions').attr('disabled',false);
        fillDivisions($(this));
    });
});
function fillStream(std){
    if(std.data('options') == undefined){
        /*Taking an array of all options-2 and kind of embedding it on the select1*/
        std.data('options',$('#streams option').clone());
    }
    var id = std.val();
    var options = std.data('options').filter('[data-std-code=' + id + ']');
    if(options.length >= 1)
        $('#streams').html(options);
    else{
        $('#streams').html('<option value="0">-- Empty --</option>');
        $('#divisions').html('<option value="0">-- Empty --</option>');
    }

}
function fillDivisions(std){
    if(std.data('options') == undefined){
        /*Taking an array of all options-2 and kind of embedding it on the select1*/
        std.data('options',$('#divisions option').clone());
    }
    var id = std.val();
    var options = std.data('options').filter('[data-std-code=' + id + ']');
    if(options.length >= 1)
        $('#divisions').html(options);
    else{
        //$('#streams').html('<option value="">-- Empty --</option>');
        $('#divisions').html('<option value="0">-- Empty --</option>');
    }
}