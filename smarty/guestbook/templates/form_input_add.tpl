<form method="POST">
	{*
		form to add input name and type 
	*}

	<div class="input-name">
		<select name="input_type" id="type_selector">
			<option value="0">------ select input ------</option>
			
			{foreach from=$aInputTypes key=sKey item=sValue}
				<option value="{$sKey}">{$sValue}</option>
			{/foreach}
		</select>
	</div>

	<div id="inputs_wrapper">
		
	</div>
</form>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#type_selector').on('change', function(){
			$.post('{$action_url}', {type: $(this).val()}, function(response)
			{
				$('#inputs_wrapper').html(response);
			}, 'text');
		});
		
	});
</script>