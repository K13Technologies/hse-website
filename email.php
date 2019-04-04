<?php
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $name = $firstname . " " . $lastname;
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $company = $_REQUEST['company'];
  $interest = $_REQUEST['interest'];
  $question = $_REQUEST['question'];
  
  $to = 'sales@whiteknightsafety.com';
  $from = 'WKS Inquiry <sales@whiteknightsafety.com>';
  $array = array();  

  $headers = "From: WKS Inquiry <sales@whiteknightsafety.com>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers .= "Reply-To: " . $email; 

  $subject = "White Knight Safety Inquiry";

  $message = "<html><body style='background-color:#ececec; margin: 0; padding: 0;'>\r\n";
  $message .= "<table width='100%' cellpadding='0' cellspacing='0' border='0' style='width: 100%; border-spacing: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; background-color: #ececec;'>\r\n";
  $message .= "<trbody>\r\n";
  $message .= "<tr style='border-collapse: collapse;'>\r\n";
  $message .= "<td align='center' bgcolor='#ececec'>\r\n";
  $message .= "<table style='margin:0 10px;' width='640' cellpadding='0' cellspacing='0' border='0'>\r\n";
  $message .= "<tr><td bgcolor='#ececec' height='50' align='center'></td></tr>\r\n";
  $message .= "<tr><td bgcolor='#ffffff' height='50'></td></tr>\r\n";
  $message .= "<tr>\r\n";
  $message .= "<td width='640' align='center' bgcolor='#ffffff'>\r\n";
  $message .= "<h2 style='font-size:22px; font-family:Georgia,serif; font-weight:bold;'>White Knight Safety</h2>\r\n";
  $message .= "<h2 style='font-size:22px; font-family:Georgia,serif; font-weight:normal;'>Customer Inquiry</h2>\r\n";
  $message .= "</td>";
  $message .= "</tr>";
  $message .= "<tr><td bgcolor='#ffffff' height='10'></td></tr>\r\n";
  $message .= "<tr>\r\n";
  $message .= "<td width='640' height='50' align='left' bgcolor='#ffffff'>\r\n";
  $message .= "<p style='font-size:18px; font-weight:normal; font-style:normal; margin:20px; color:#333333; font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;'><b>Name:</b> ". $name ." <br> <b>Email:</b> ". $email ." <br> <b>Phone Number:</b> ". $phone ." <br> <b>Company:</b> ". $company ."<br> <b>Interest:</b> ". $interest ." <br> <b>Question:</b> ". $question ." </p>\r\n";
  $message .= "</td>\r\n";
  $message .= "</tr>\r\n";
  $message .= "<tr><td bgcolor='#ffffff' height='50'></td></tr>\r\n";
  $message .= "<tr><td bgcolor='#ececec' height='50' align='center'></td></tr>\r\n";
  $message .= "</trbody>\r\n";
  $message .= "</table>\r\n";
  $message .= "</body></html>\r\n";

  mail($to, $subject, $message, $headers);
		
	$array[0] = "success";
	$array[1] = "Email sent succesfully!";

  echo json_encode($array);
?>