var modal = new bootstrap.Modal(document.getElementById('modal'));
var modalBody = $('.modal-content');

console.log(modalBody)

$('#img-space a').each(function (index, element) {
    // element == this
    $(this).click(function () {
        var id = $(this).attr('id');
        console.log(id)
        modalBody.html("<img src='./images/pic-" + id + ".jpg'>");
        modal.show();
    })
});