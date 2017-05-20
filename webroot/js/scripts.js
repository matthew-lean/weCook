$(document).ready(function() {

	//Add step
	$('#newStep').click(function() {
		// Add new step input field
		var stepItems = $('.stepinput').length;
		// var stepItemsaddone = $('.stepinput').length + 2;
		$('#StepAdd').append('<input type="text" class="stepinput" name="steps[' + stepItems + '][description]" placeholder="Step ' + (stepItems + 1) + '" maxlength="144" id="steps-' + stepItems + '-description"> <input type="hidden" name="steps[' + stepItems + '][position]" value=' + (stepItems + 1) + '>');
		console.log('+ Add Step.. Total Steps = ' + (stepItems+1));
	});

	//Remove Step
	$('#removeStep').click(function() {
		// remove the last input and the hidden input
		var stepItems = $('.stepinput').length;
		if (stepItems > 1) {
			$('#StepAdd').children().last().remove();
			$('#StepAdd').children().last().remove();
		console.log('- Remove Step.. Total Steps = ' + (stepItems-1));
		}
	});

	var stepItems = $('.stepinput').length;

	function stepcounter() {
		// console log the amount of step input boxes
		console.log('Step inputs ' + stepItems);
	}
	//call function
	stepcounter()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  //Add ingredient
	$('#newIngredient').click(function() {
    var ingredientItems = $('.ingredientinput').length + 1;
		// Add new Ingredient input field
		$('#IngredientAdd').append('<input type="text" class="ingredientinput" name="ingredients[' + ingredientItems + '][name]" placeholder="Ingredient" maxlength="144" id="ingredients-' + ingredientItems + '-name">');
		console.log('+ Add Ingredient.. Total Ingredients = ' + (ingredientItems+1));
	});

  //Remove Ingredient
	$('#removeIngredient').click(function() {
    var ingredientItems = $('.ingredientinput').length;
		if (ingredientItems > 0) {
        // remove the last input
		    $('#IngredientAdd').children().last().remove();
		// count--;
		console.log('- Remove Ingredient.. Total Ingredients = ' + (ingredientItems));
    }
	});

  var ingredientItems = $('.ingredientinput').length;

	function ingredientcounter() {
		// console log the amount of Ingredient input boxes
		console.log('Ingredient inputs ' + ingredientItems);
	}
	//call function
	ingredientcounter()

});
