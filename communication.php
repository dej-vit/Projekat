<!DOCTYPE html>
<html>
<head>
	<title></title>
	   
</head>
<body>
       <h4>Form for communication</h4>
       <br>
       My E-mail address:info@dvdbg.com Enter into form.
       <br>
       <br>
       <form    method = "post"   action = "communication.php" > 
       <table>
       <tr> 
       <td valign="top" align="right">My E-mail address:</td>
       <td><input name="email" type = "text"></td> 
       </tr>
       <tr>
       <td valign="top" align="right">Your name and surname:</td>
       <td><input  name="name" type = "text"></td>
       </tr>
       <tr>
       <td align="right" >Yur Email adres<br> and Your message:</td>
       <td><textarea name="message" cols="25" rows="6"></textarea></td>
       </tr>
       <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="Submit" value="Send e-mail"></td>
       </tr>
       </table>
       </form> 
       <br>
       <br>
 
 
 
  <?php 
   
 $email   =   $_POST [ 'email' ] ; 
 $name   =   $_POST [ 'name' ] ; 
 $message   =   $_POST [ 'message' ] ; 
 
 $to = "info@dvdbg.com"; 
 $data ="Received from:$name";
 $text_message = "The text of the message: 
 $message"; 
 
 // Always set content-type when sending HTML email 
 $headers   =   "MIME-Version: 1.0"   .   "\r\n" ; 
 $headers   .=   "Content-type:text/html; charset = UTF-8"   .   "\r\n" ; 
 $headers   .=   "From: <" . $email . ">"   .   "\r\n" ; 
 $sent   =   mail ( $to , $data , $text_message ,$headers ) ;
  
 if ( $sent ) {
   echo  "Thank you for contacting me, i will get back to you shortly.";
  
 } 
 else { 
  echo   "Sorry! Your form submission is failed."; 
   
  } 
  
  
 ?> 
 <br>
 <br>
 <br>
  <a  href = "logout.php" > Logout </a>   
</body>
</html>