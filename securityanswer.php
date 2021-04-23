//PHP:

$rand1 = rand(1, 9);
$rand2 = rand(1, 9);

//HTML:

<div>
	<label><?php echo $rand1;?> x <?php echo $rand2;?> =   </label>
	<input type="text" class="form-control" name="sum" id="ques" placeholder="<-- Your Answer" required>
  	<input id="sendbtn" type="submit" name="submit" value='Send' disabled>
</div>

//Jquery to check user's answer. If the answer is correct, as soon as the user move the mouse out of the field, the "Send" button is enabled otherwise it's disabled:

$("#ques").on('mouseout', function() {
  var sumques = $("#ques").val();
  var val1 = <?php echo $rand1;?>;
  var val2 = <?php echo $rand2;?>;
  var sumOfValues = val1 * val2;
  
  if (sumOfValues == sumques) 
	{
		$("#sendbtn").prop('disabled', false);
	}
  else
  	{
		$("#sendbtn").prop('disabled', true);
 	}  
});