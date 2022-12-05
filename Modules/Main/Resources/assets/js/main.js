/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


$('.slick-index').slick({
    infinite: true,
    speed: 300,
    dots: true,
    arrows: true,
    autoplay: true
});

$('.slick-pop').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    autoplay: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true
            }
        }
    ]
});


//******** Feedback form modal and recatpcha *************//

let form = $('#feedbackModal').find('.modal-body').html();

$('#feedbackModal').on('hidden.bs.modal', function () {
    $('#feedbackModal').find('.modal-body').html(form);
    $('#feedbackModal').find('.sbmt').show();
    $(this).find('.feedbackForm')[0].reset();
    $(this).find('.error').html("");
});


function callbackThen(response) {
    // read Promise object
    response.json().then(function (data) {
        console.log(data);
        if (data.success && data.score >= 0.6) {

            $('.feedbackForm').submit(function (e) {
                e.preventDefault(e);

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'post',
                    dataType: 'json',
                    data: $(this).serialize(),
                    beforeSend: function () {
                        $('#feedbackModal').find('.error').html("");
                        $('.loader').fadeIn(200);
                    },
                    success: function (data) {
                        $('.loader').fadeOut(400);

                        $('#feedbackModal').find('.modal-body').html(data["success"]);
                        $('#feedbackModal').find('.sbmt').hide();
                    },
                    error: function (err) {
                        $('.loader').fadeOut(400);
                        $.each(err.responseJSON, function (key, value) {
                            $('.' + key).show();
                            $('.' + key).append('<p>' + value + '</p>');
                        });
                        console.log(err);
                    }
                });

            });

        } else {
            $('.feedbackForm').submit(function (e) {
                e.preventDefault(e);
                console.log('капча невалидна');
            });
        }
    });
}

function callbackCatch(error) {
    console.error('Error:', error)
}



//*************** Scroll to top button **************//


let topBtn = $('.top-btn');
$(topBtn).css("display", "flex").hide();
window.onscroll = function () {
    scrollFunction();
};
function scrollFunction() {
    if (
            //document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 1600
            ) {
        $(topBtn).fadeIn(400);
    } else {
        $(topBtn).fadeOut(400);
    }
}
// When the user clicks on the button, scroll to the top of the document
$(topBtn).on("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}