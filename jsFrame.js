var x = 1
var go = 0;
$(document).ready(function () {
    start();

});


function start() {
    if (go == 0) {
        x++;
        if (x > 4) {
            x = 1
        }
        setTimeout(pickImage, 5000);
    }
}

function pick(choice) {
    x = choice;
    go = 1; //stops slide show
    pickImage();
    $('html,body').animate({ scrollTop: 0 }, 'slow');
}

$('.gallery').click(function () {
    $("body").animate({ scrollTop: 0 });
});

var images = new Array()

function preload() {
    for (i = 0; i < preload.arguments.length; i++) {
        images[i] = new Image()
        images[i].src = preload.arguments[i]
    }
}
preload(
    "https://prottaspainting.net/images/house3.webp",
)

function pickImage() {
    switch (x) {

        case 1:

            $(".parallax").css({ "background-image": "url(images/house3.webp)" });
            break;

        case 2:
            $(".parallax").css({ "background-image": "url(images/crane.jpg)" });
            break;

        case 3:
            $(".parallax").css({ "background-image": "url(images/house1.jpg)" });
            break;

        case 4:
            $(".parallax").css({ "background-image": "url(images/house4.jpg)" });
            break;

        case 5:
            $(".parallax").css({ "background-image": "url(images/house2.jpg)" });
            break;

        case 6:
            $(".parallax").css({ "background-image": "url(images/paintRepair.jpg)" });
            break;

        case 7:
            $(".parallax").css({ "background-image": "url(images/truck.jpg)" });
            break;

        case 8:
            $(".parallax").css({ "background-image": "url(images/interior.jpeg)" });
            break;

        case 9:
            $(".parallax").css({ "background-image": "url(images/interior2.jpeg)" });
            break;

        case 10:
            $(".parallax").css({ "background-image": "url(images/interior3.jpeg)" });
            break;
        case 11:
            $(".parallax").css({ "background-image": "url(images/interior4.JPG)" });
            break;
        case 12:
            $(".parallax").css({ "background-image": "url(images/interior5.JPG)" });
            break;
        case 13:
            $(".parallax").css({ "background-image": "url(images/interior6.JPG)" });
            break;



    }
    start();

}


