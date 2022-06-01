$(document).ready(function () {
    var $contactForm = $("contact-form");
    $contactForm.on('beforeSubmit', function () {
        var dataForm = $contactForm.serialize();
        $.ajax({
            url:    $contactForm.attr('action'),
            type:   'POST',
            data:   dataForm,
            success:    function(dataForm){},
            error:      function (jqXHR, errMgs) {
                alert("Hummmm hã");
            }
        });
        // prevent default submit
        return false;
    })
});