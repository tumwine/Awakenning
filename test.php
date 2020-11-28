
          <?php 

                $to = 'tumwineivan20@gmail.com';
                $subject = "Contact from Awakenning";
                $message = "message";
                $headers = "From: ivan20@gmail.com";

                if (mail($to, $subject, $message,$headers))
                {
                  echo "message sent succefully";
                }

                else {
                  echo "message not sent";
                }


          ?>
