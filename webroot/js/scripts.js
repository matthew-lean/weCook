$(document).ready(function(){

  // $('#name').hide();
  //$('#description').hide();
  //$('#ingredients-ids').hide();
  //$('#test').hide();

  $('button').click(function() {
    //$('steps[0][description]').slideUp();
    //$('#description').slideDown();
    //$( "#input" ).append( "<input type='text'>" );
  });

  $('.Ingredient').hide();
  var count = 0;
  $('#IngredientAdd').on('click',function(){
    $('.Ingredient:eq('+count+')').show();
    count++;
  });

});
