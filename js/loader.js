$(document).ready(function(){
    $('.modal').modal();
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.slider').slider({full_width: true});
    $('.parallax').parallax();
    $('.myreviews').carousel({
        numVisible: 7,
        shift: 55,
        padding: 55
    });
});

function toggleModal(){
    var instance = M.Modal.getInstance(modal3);
    instance.open();
}
function toggleModal1(){
    var instance = M.Modal.getInstance(modal2);
    instance.open();
}
$('#exampleModal').on('shown.bs.modal', function () {
    var button = $(event.relatedTarget)
  })
