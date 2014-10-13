$(function(){
	// slug converter
	$("#title").keyup(function(){
		var Text = $(this).val();
		$("#slug").val(convertToSlug(Text));    
	});

	function convertToSlug(Text)
	{
		return Text
		.toLowerCase()
		.replace(/ /g,'-')
		.replace(/[^\w-]+/g,'')
		;
	}
});