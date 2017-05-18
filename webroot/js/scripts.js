$(document).ready(function(){

  // $('#name').hide();
  //$('#description').hide();
  //$('#ingredients-ids').hide();
  //$('#test').hide();

  // $('button').click(function() {
  //   $('steps[0][description]').slideUp();
  //   $('#description').slideDown();
  //   $( "#input" ).append( "<input type='text'>" );
  // });

  // $('.Ingredient').hide();
  // var count = 0;
  // $('#IngredientAdd').on('click',function(){
  //   $('.Ingredient:eq('+count+')').show();
  //   count++;
  // });

  var count = 1;

  $('#newStep').click(function() {
    // Add new step input field
    $('#StepAdd').append('<input type="text" class="yo" name="steps['+ count++ +'][description]" placeholder="Step '+ (count) +'" maxlength="144" id="steps-'+ (count-1) +'-description"> <input type="hidden" name="steps['+ (count-1) +'][position]" value=' + count + '>')
    ;
    console.log('Add Step');
  });

  $('#removeStep').click(function(){
    // remove the last input and the hidden input
    $('#StepAdd').children().last().remove();
    $('#StepAdd').children().last().remove();
    count--;
    console.log('Remove Step');
  });


  function stepcounter(){
  // console log the amount of input boxes
  console.log('go');
  }

  stepcounter()


  $('#newIngredient').click(function() {
    // Add new Ingredient input field
    $('#IngredientAdd').append('<input type="text" name="ingredients['+ count++ +'][name]" placeholder="Ingredient" maxlength="144" id="ingredients-'+ (count-1) +'-name">');
    console.log('Add Ingredient');
  });

  $('#removeIngredient').click(function(){
    // remove the last input and the hidden input
    $('#IngredientAdd').children().last().remove();
    count--;
    console.log('Remove Ingredient');
    });


});
