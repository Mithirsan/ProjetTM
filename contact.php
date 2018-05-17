<!DOCTYPE html>
<html>
    <head>
        <title>Contact us!</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="JS/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <script src="JS/bootstrap.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/CSS/styleContact.css">
        <script src="/JS/scriptContact.js"></script>
    </head>
    <body>
       <?php include 'navbar.php'; ?>
        
       <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contact us</h2>
            </div>
                
           <div class="row">
               <div class="col-lg-12 col-lg-offset-1">
                    <form id="contact" method="post" action="" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">First name <span class="blue">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Your frist name">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Last name <span class="blue">*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Your last name">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="email">E-mail <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="sample@sample.com">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Tell us ..." rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* required.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="send">
                            </div>    
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </body>
</html>

