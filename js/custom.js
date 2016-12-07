$(document).ready(function() {
    $('#effort').DataTable( {
        "scrollX": true,
         "ordering": false,
        "bSort": false,
        "language": {
            "lengthMenu": "Viser _MENU_ løpere per side",
            "zeroRecords": "Fant ingenting - sorry",
            "info": "Side _PAGE_ av _PAGES_",
            "infoEmpty": "Ingen løpere.....",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "columnDefs": [
        {
            "targets": [ 3 ],
            "visible": false
        }
    ]
    } );

     $('#admin').DataTable( {
        "scrollX": true,
         "ordering": false,
        "bSort": false

    } );

    
 } );
$(document).ready(function () {
    toggleFields(); 
    $("#formtyper").change(function () {
        toggleFields();
    });
    $('*[data-poload]').on('click', function(e) {e.preventDefault(); return true;});
    $('*[data-poload]').click(function() {
        var e=$(this);
        //e.off('click');
        $.get(e.data('poload'),function(d) {
           console.log(d);
            e.popover({content: d}).popover('show');
        });
    });

});
function toggleFields() {
    if ($("#formtyper").val() == 1) {
        $("#formdate").hide();
        $("#startdate").val("1970-07-01");
        $("#enddate").val("2038-01-01");
    } else if ($("#formtyper").val() == 2) {
        $("#formdate").hide();
        var defaultStart = new Date().getFullYear() + "-01-01";
        var defaultEnd = new Date().getFullYear() + "-12-31";
        $("#startdate").val(defaultStart);
        $("#enddate").val(defaultEnd);
    } else if ($("#formtyper").val() == 3) {
        var d = new Date();

        var MyDate = new Date();
        var MyDateString;
        MyDate.setDate(MyDate.getDate());
        MyDateString = MyDate.getFullYear() +'-'+ 
                        ('0' + (MyDate.getMonth()+1)).slice(-2) + '-' + 
                        ('0' + MyDate.getDate()).slice(-2);


         //$("#startdate").val(MyDateString);
        //$("#enddate").val(MyDateString);
        $("#formdate").show();
    } else $("#formdate").hide();
}






