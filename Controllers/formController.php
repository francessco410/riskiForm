<?php
require_once dirname(__FILE__).'/../vendor/autoload.php';
//require_once dirname(__FILE__).'/../Composer Libraries/PHPMailerAutoload.php.php';
require_once dirname(__FILE__).'/../BL/Person.php';
require_once dirname(__FILE__).'/../BL/Student.php';
require_once dirname(__FILE__).'/../Controllers/ImageController.php';

/**
 * Description of fromValid
 *
 * @author marcinwlodarczyk
 */
class formController {
    
    public static function valid(){
        $person = new Person();
        $student = new Student();
        $Image_errors = array();
        
        if(isset($_POST['riski-form-submit'])){
            $person->name = htmlspecialchars($_POST['name']);
            $person->surname = htmlspecialchars($_POST['surname']);
            $person->email = htmlspecialchars($_POST['email']);
            $person->sex = htmlspecialchars($_POST['sex']);
            $person->country = htmlspecialchars($_POST['country']);
            $person->smoker = htmlspecialchars($_POST['smoker']);
            
            $Image = new ImageController();
            $person->photo = $Image->process() ? $Image->getPath() : 1;
            $Image_errors = $person->photo == 1 ? $Image->getError() : FALSE;

            $student->course = htmlspecialchars($_POST['course']);
            $student->home_university = htmlspecialchars($_POST['home_univeristy']);
            $student->arrival_date = htmlspecialchars($_POST['date']);
            $student->months = htmlspecialchars($_POST['months']);
            $student->room_type = htmlspecialchars($_POST['room_type']);
            $student->kit = htmlspecialchars($_POST['kit']);
            $student->date = date('y-m-d');
            $student->comment = htmlspecialchars($_POST['comment']);
            $student->validated = 0;
        }
        
        $flag_person = $person->validation();
        $flag_student = $student->validation();
        
        if($flag_person !== 0 || $flag_student !== 0 || $Image_errors){
            
        }else{
            $flag = $person->save();
            if($flag){
              $student->person_booking_id = $person->id;
              $flag = $student->save();
            }
        

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    //        $mail->isSMTP();                                      // Set mailer to use SMTP
    //        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    //        $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //        $mail->Username = 'user@example.com';                 // SMTP username
    //        $mail->Password = 'secret';                           // SMTP password
    //        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //        $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('marcin.wlodarczyk@riskivector.com', 'Marcin Włodarczyk');
            $mail->addAddress('marcin.wlodarczyk@gmail.com', 'System');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
        }
        
        return $flag;
    }
}
