{foreach from=$aAttrs key=sKey item=sVal}
	<label for="add_attr--{$sKey}">{$sVal}: </label><input id="add_attr--{$sKey}" type="text"><br />
{/foreach}