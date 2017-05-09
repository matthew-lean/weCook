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

  $('#IngredientAdd').click(function() {
    // Add new step input field
    $('#newStep').append('<input type="text" name="steps['+ count++ +'][description]" placeholder="Ingredient" maxlength="144" id="steps-'+ (count-1) +'-description">');
    // console log the amount of input boxes
    console.log($('#newStep').children().length);
  });

  // $('#IngredientAdd').click(function() {
  //   var lastname = $('#newStep [name^=value]:last-child')[0].name;
  //   var next = parseInt(lastname.match(/\d+/)[0]) + 1;
  //   $('#newStep').append('<input type="text" name="steps[' + next + ']" value="more more text">');
  //   // console log the amount of input boxes
  //   console.log($('#newStep').children().length);
  // });

});
