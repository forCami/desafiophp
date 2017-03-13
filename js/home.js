$(document).ready(function() {
$('#tabla').dataTable({
    "paging": false, //Oculta la paginacion
    "info": false, //Oculta showing of 1 to 2 items of 2
    "searching": false,
    responsive: true,
        "sScrollX": "100%",
    "columnDefs": [
    { "orderable": false, "targets": 4 }
  ]//"autoWidth": false, "scrollX": true,"scrollY": "200px"

     });
});