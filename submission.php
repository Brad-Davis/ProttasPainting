<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
        <link rel ="stylesheet" href="styleFrame.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <nav>
            <div class = "container">
                <header>
                    <img src = "images/prottaslogofinal.png" style = "height: 60px;">
                </header>
                <a href="index.html">Home</a>
                <a href="gallery.html">Gallery</a>
                <a class="active" href="contact.html">Contact</a>
            </div>
        </nav>
        
        <div class="fakePara"><div style="width: 100%"><iframe width="100%" height="700px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=9%20Overhill%20Rd%2C%20Natick%2C%20MA%2001760+(Prottas%20Painting)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/"></a></iframe></div></div>
        
        
        <div class="content">
            <div class="container">
                
                
            <hr class="featurette-divider">
                <div class="col-md-7 col-md-push-5">
                    <form action = 'submission.php' method = "post">
                        <h1>Email Us!</h1>
                        Enter Name: <input style="color: black; mar" type="text" name="name"><br><br>
                        Enter Email Address:    <input style="color: black;" type="email" name="email"><br><br>
                        Enter Message:  <br>
                        <textarea style="width: 100%; resize: none; height: 100px; color: black;" name="message"></textarea><br><br>
                        <input id = "sendingButton" type="submit" value="Send Email">
                        <br>
                        <br>
                    </form>
                    <?php
                    $filled = true;
                    $array = ['message', 'email', 'name'];
                    foreach($array as $value){
                        if(empty($_POST[$value])){
                            $filled = false;
                            echo("<p>Please make sure to fill in all sections!</p>Also just so you don't lose your message:<br>" . $_POST['message']);
                            break;
                        }
                    }
                    if($filled){
                        $msg = $_POST['message'] . "\n \n From, " . $_POST['email'];
                        $name = $_POST['name'];
                        mail("glennprottas@hotmail.com", $name . ": Website Email",$msg);
                        echo("<p>Message sent! We will be back to you soon!</p>");
                    }
                    ?>
                </div>
            <div class="col-md-5 col-md-pull-7">
                <img src ="images/truck.jpg" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                <h1>Prottas Painting</h1>
                <p>Address: 9 Overhill Rd, Natick, MA 01760<br>Phone: <a href="https://www.google.com/search?q=prottas+painting&oq=prottas+painting&aqs=chrome..69i57.4499j1j7&sourceid=chrome&ie=UTF-8#">(508) 650-3909</a> </p>
            </div>
            <div style = "clear:both;" class = "divider">
                
            </div>
            <hr class="featurette-divider">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>Prottas Painting 2018 | Website Created by Brad Davis</p>
            </footer>
        </div>
        </div>
        
         
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src='jsFrame.js'></script>
    </body>
</html>