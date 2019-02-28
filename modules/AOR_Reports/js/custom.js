$(document).ready(function() {
	
	$('#download_pdf_button_old').click(function() {
		//Update the Detail view form to have the parameter info and reload the page
		var _form = $('#formDetailView');
		$('#formDetailView :input[name="action"]').val("DownloadPDF");
		//Add each parameter to the form in turn
		$('.aor_conditions_id').each(function(index, elem){
			$elem = $(elem);
			var ln = $elem.attr('id').substr(17);
			var id = $elem.val();
			_form.append('<input type="hidden" name="parameter_id[]" value="'+id+'">');
			var operator = $("#aor_conditions_operator\\["+ln+"\\]").val();
			_form.append('<input type="hidden" name="parameter_operator[]" value="'+operator+'">');
			var fieldType = $('#aor_conditions_value_type\\['+ln+'\\]').val();
			_form.append('<input type="hidden" name="parameter_type[]" value="'+fieldType+'">');
			var fieldInput = $('#aor_conditions_value\\['+ln+'\\]').val();
			_form.append('<input type="hidden" name="parameter_value[]" value="'+fieldInput+'">');
		});
		_form.submit();
	});
	
	$('#download_csv_button_old').click(function() {
		//Update the Detail view form to have the parameter info and reload the page
		var _form = $('#formDetailView');
		$('#formDetailView :input[name="action"]').val("Export");
		//Add each parameter to the form in turn
		$('.aor_conditions_id').each(function(index, elem){
			$elem = $(elem);
			var ln = $elem.attr('id').substr(17);
			var id = $elem.val();
			_form.append('<input type="hidden" name="parameter_id[]" value="'+id+'">');
			var operator = $("#aor_conditions_operator\\["+ln+"\\]").val();
			_form.append('<input type="hidden" name="parameter_operator[]" value="'+operator+'">');
			var fieldType = $('#aor_conditions_value_type\\['+ln+'\\]').val();
			_form.append('<input type="hidden" name="parameter_type[]" value="'+fieldType+'">');
			var fieldInput = $('#aor_conditions_value\\['+ln+'\\]').val();
			_form.append('<input type="hidden" name="parameter_value[]" value="'+fieldInput+'">');
		});
		_form.submit();
	});
});