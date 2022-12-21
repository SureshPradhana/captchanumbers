<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<?php
	include("contactform.php");
	
	?>

    <!-- Captcha error message -->
    <?php if(!empty($captchaError)) {?>
      <div class="form-group col-12 text-center">
        <div class="alert text-center <?php echo $captchaError['status']; ?>">
          <?php echo $captchaError['message']; ?>
        </div>
      </div>
    <?php }?>
    <div class="container" style="width:50vw;">
	<form action="" name="contactForm" method="post" enctype="multipart/form-data">
     

      <div class="row">
        <div class="form-group col-6">
          <label>Enter Captcha</label>
          <input type="number" class="form-control" name="captcha" id="captcha">
        </div>
        <div class="form-group col-6">
          <label>Captcha Code</label>
          <img src="captcha.php" alt="PHP Captcha" id="imag">
          <button id="refresh">refresh</button>
        </div>
      </div>
       <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
</form>
<script>
$("refresh").click(()=>{$('imag').attr(src,'captcha.php')})
	</script>
     
    
	
</div>
</body>
</html>