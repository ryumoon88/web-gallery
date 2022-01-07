var modal = new bootstrap.Modal(document.getElementById('modal'));
var modalBody = $('.modal-content');

console.log(modalBody)

$('#img-space a').each(function (index, element) {
    // element == this
    $(this).click(function () {
        var id = $(this).attr('id');
        modalBody.html("<img src='./images/pic-" + id + ".jpg'>");
        modal.show();
    })
});

$('.nav-link').each(function (index, element) {
    $(this).click(function () {
        var a = $($(this).attr('href')).scrollTop();
        console.log(a)
    })
})