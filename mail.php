Mail
<?php
  $mail = mail("adi.sdboy@gmail.com","Fun", wordwrap(file_get_contents("message.txt"), 70), "From: Yolo <yolo@sduhsd.net>");
  if($mail) {
    echo "Done!";
  } else {
    echo "Error!";
  }
?>
