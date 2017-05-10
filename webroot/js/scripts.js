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

  // $('.Ingredient').hide();
  // var count = 0;
  // $('#IngredientAdd').on('click',function(){
  //   $('.Ingredient:eq('+count+')').show();
  //   count++;
  // });

  var count = 1;

  $('#newStep').click(function() {
    // Add new step input field
    $('#StepAdd').append('<input type="text" name="steps['+ count++ +'][description]" placeholder="Step '+ (count) +'" maxlength="144" id="steps-'+ (count-1) +'-description"> <input type="hidden" name="steps['+ (count-1) +'][position]" value=' + count + '>')
    ;
  });

  $('#removeStep').click(function(){
    $('#StepAdd').children().last().remove();
    $('#StepAdd').children().last().remove();
    count--;
    // remove the last input and the hidden input
  });

  $('#newIngredient').click(function() {
    // Add new Ingredient input field
    $('#IngredientAdd').append('<input type="text" name="ingredients['+ count++ +'][name]" placeholder="Ingredient" maxlength="144" id="ingredients-'+ (count-1) +'-name">');
    // console log the amount of input boxes
    //console.log($('#IngredientAdd').children().length);
  });

});
