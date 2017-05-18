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

  //Add recipe page buttons
  //Add step
  $('#newStep').click(function() {
    // Add new step input field
    $('#StepAdd').append('<input type="text" class="yo" name="steps['+ count++ +'][description]" placeholder="Step '+ (count) +'" maxlength="144" id="steps-'+ (count-1) +'-description"> <input type="hidden" name="steps['+ (count-1) +'][position]" value=' + count + '>')
    ;
    console.log('Add Step');
  });
  //Remove Step
  $('#removeStep').click(function(){
    // remove the last input and the hidden input
    $('#StepAdd').children().last().remove();
    $('#StepAdd').children().last().remove();
    count--;
    console.log('Remove Step');
  });


    var stepItems = $('.stepinput').length;
    function stepcounter(){
    // console log the amount of step input boxes
    console.log('Step inputs ' + stepItems);
    }
    //call function
    stepcounter()

    var ingredientItems = $('.ingredientinput').length;
    function ingredientcounter(){
    // console log the amount of ingredient input boxes
    console.log('Ingredient inputs ' + ingredientItems);
    }
    //call function
    ingredientcounter()


  //edit recipe page buttons
  //Add step
  $('#EditnewStep').click(function() {
    // Add new step input field
    var stepItems = $('.stepinput').length + 1;

    $('#EditStepAdd').append('<input type="text" class="NeweditStep stepinput" name="steps['+ stepItems +'][description]" placeholder="Step '+ stepItems +'" maxlength="144" id="steps-'+ stepItems +'-description"> <input type="hidden" name="steps['+ stepItems +'][position]" value=' + stepItems + '>');
    console.log('Add Edit Step');
  });
  //Remove Step
  $('#editremoveStep').click(function(){
    // remove the last input and the hidden input
    var stepItems = $('.stepinput').length;

    if (stepItems > 1) {
      $('#EditStepAdd').children().last().remove();
      $('#EditStepAdd').children().last().remove();
    }
  });

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
