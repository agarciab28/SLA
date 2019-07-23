document.addEventListener('DOMContentLoaded', function() {
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var day = date.getDate();
  var date = new Date(year, month, day);

  const options = {
    format: 'yyyy-mm-dd',
    minDate: date,
    i18n: {
      months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
      weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
      weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
      cancel: 'Cancelar',
      clear: 'Limpiar',
    },
  };

  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
  const options = {
    twelveHour: false,
    cancel: 'Cancelar',
    clear: 'Limpiar',
  }

  var elems = document.querySelectorAll('.timepicker');
  var instances = M.Timepicker.init(elems, options);
});
