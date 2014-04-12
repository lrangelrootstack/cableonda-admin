//File web\bundles\cableondaadmin\js\jquery_admin.js
 jQuery(document).ready(function(){
	jQuery.datepicker.setDefaults( jQuery.datepicker.regional[ "es" ] );
	jQuery.timepicker.regional['es'] = {
		timeOnlyTitle: 'Tiempo',
		timeText: 'Tiempo',
		hourText: 'Hora',
		minuteText: 'Minutos',
		secondText: 'Segundos',
		millisecText: 'Milisegundos',
		timezoneText: 'Часовой пояс',
		currentText: 'Ahora',
		closeText: 'Cerrar',
		timeFormat: 'HH:mm:ss',
		amNames: ['AM', 'A'],
		pmNames: ['PM', 'P'],
		isRTL: false
	};
	jQuery.timepicker.setDefaults(jQuery.timepicker.regional['es']);
	//jQuery(".datepicker").datepicker( jQuery.datepicker.regional[ "es" ]);
	jQuery(".datepicker").datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: 'HH:mm:ss',
		stepHour: 1,
		stepMinute: 1,
		stepSecond: 10
	});
	jQuery('label[for="filter_hora_value_start"]').html('Desde');
	jQuery('label[for="filter_hora_value_end"]').html('Hasta');
	//jQuery('a[data-toggle="offcanvas"]').click();
 });