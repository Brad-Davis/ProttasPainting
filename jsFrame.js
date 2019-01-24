var x = 1
var go = 0;
$(document).ready(function(){
    start();
 
});


function start(){
    if(go == 0){
        x++;
        if(x>4){
            x=1
        }
        setTimeout(pickImage,5000);
    }
}

function pick(choice){
    x = choice;
    go = 1; //stops slide show
    pickImage();
}

$('.gallery').click(function(){
    $("body").animate({scrollTop:0});
});




function pickImage(){
    switch (x){

        case 1:

        $(".parallax").css({"background-image": "url(images/house3.jpg)"});
        break;

        case 2:
        $(".parallax").css({"background-image": "url(images/crane.jpg)"});
        break;

        case 3:
        $(".parallax").css({"background-image": "url(images/house1.jpg)"});
        break;

        case 4:
        $(".parallax").css({"background-image": "url(images/house4.jpg)"});
        break;
    
        case 5:
        $(".parallax").css({"background-image": "url(images/house2.jpg)"});
        break;
        
        case 6:
        $(".parallax").css({"background-image": "url(images/paintRepair.jpg)"});
        break;
        
        case 7:
        $(".parallax").css({"background-image": "url(images/truck.jpg)"});
        break;
        
            
    }
    start();
    
}


