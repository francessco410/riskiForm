<?php
    require_once dirname(__FILE__).'/Controllers/formController.php';
    require_once dirname(__FILE__).'/captcha.php';
    require_once dirname(__FILE__).'/lib/header.lib.php';
    $secret = "6Lf2cywUAAAAAIW4_0Z4utcqE8GuSLTwuMQsTbGY";
    $resp = NULL;
    $reCaptcha = new ReCaptcha($secret);

    if (isset($_POST["g-recaptcha-response"])) {
        $resp = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
    
    if ($resp != null && $resp->success) {
        echo "You got it!";
    }
    
    if(isset($_POST['riski-form-submit'])){
        $validation = formController::valid();
        
        unset($_POST);
        unset($_REQUEST);
        
        if($validation){
           header('Location: index.php?page=success');
        }
    }
?>
    <body>
        <?php
            if(isset($_GET['page'])){
                $file = $_GET['page'];

                $path=dirname(__FILE__).'/lib/'.$file.'.lib.php';
                if(file_exists($path)){
                    require_once $path;
                }else{
                    require_once dirname(__FILE__).'/lib/body.lib.php';
                }
            }else{
                //require_once dirname(__FILE__).'/lib/body.lib.php';
            }
        ?>
    </body>
</html>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';
die();

?>