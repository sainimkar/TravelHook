

<!DOCTYPE html>
<html>
   <head>
       <title><?php ?></title>
   </head>
   <body>
   <?php echo file_get_contents("index.html"); 

        $filename = 'file.txt';
        $contact_information = [];
        
        $file = fopen($filename, 'r');
        
        if (!$file) { return ; }
        
        while (!feof($file)) {
            $contact_information[] = fgets($file);
        }
        
        fclose($file);
        
   
   ?>

   <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <p class="mb-5">CEO of Travel Hook: 
                <?php 
                echo ($contact_information[0]); 
                ?> 
            </p>
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> Email</span>
                    <?php 
                      echo ($contact_information[1]);
                      ?>
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Phone</span>
                    <?php 
                      echo ($contact_information[2]);
                    ?>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Fax</span>
                    <?php 
                      echo ($contact_information[3]);
                    ?>
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span> Address</span>
                    <?php echo ($contact_information[4]); ?> <br>
                    <?php echo ($contact_information[5]); ?> <br>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6  probootstrap-animate">
            <form action="#" method="post" class="probootstrap-form probootstrap-form-box mb60">
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->






   </body>
</html>