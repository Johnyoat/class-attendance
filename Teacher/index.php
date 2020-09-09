<html>
<head>
<title>How Generate QR Code in PHP</title>
<style>
body {
    width: 550px;
    font-family: Arial;
}

#frm-qr {
    padding: 20px 40px;
    background: #CCC;
    border-radius: 3px;
}

.input-field {
    padding: 10px;
    border: 0px;
    border-radius: 3px;
    width: 250px;
}

.submit-button {
    background: #333;
    color: #FFF;
    padding: 10px 20px;
    border-radius: 3px;
}

.form-row {
    margin-bottom: 15px;
}

.result-heading {
    padding: 10px 0px 2px 0px;
    border-bottom: #333 1px solid;
    margin-bottom: 20px;
}

#validation-info {
    display: none;
    padding: 10px 20px;
    background: #f5c7c8;
    border: #e6bbbd 1px solid;
}
</style>
</head>
<body>
    <form method="post" name="frmQRGenerator" id="frm-qr"
        onSubmit="return validate();">
        <div class="form-row">
            Email: <input type="text" name="email_field"
                id="email_field" class="input-field" />
        </div>

        <div>
            <input type="submit" name="generate" class="submit-button"
                value="Generate QR Code" />
        </div>
    </form>  
    
    <div id="validation-info"></div>
    <script src="jquery-3.2.1.min.js"></script>
    <script>
function validate() {
	var valid = true;
    var emailRegexp = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
	    
    $("#validation-info").hide();
	$("#validation-info").html();
    if($("#email_field").val() == "") {
        	$("#validation-info").show();
        	$("#validation-info").html("Email is required.");
        	valid = false;
    } else if ( !( emailRegexp.test( $("#email_field").val() ) ) ) {
        $("#validation-info").show();
        $("#validation-info").html("Invalid Email.");
        valid = false;
    }
    return valid;
}
</script>
</body>
</html>
<?php
if (! empty($_POST["email_field"])) {
    require ('tc-lib-barcode/vendor/autoload.php');
    $barcode = new \Com\Tecnick\Barcode\Barcode();
    $targetPath = "qr-code/";
    
    if (! is_dir($targetPath)) {
        mkdir($targetPath, 0777, true);
    }
    $bobj = $barcode->getBarcodeObj('QRCODE,H', $_POST["email_field"], - 16, - 16, 'black', array(
        - 2,
        - 2,
        - 2,
        - 2
    ))->setBackgroundColor('#f0f0f0');
    
    $imageData = $bobj->getPngData();
    $timestamp = time();
    
    file_put_contents($targetPath . $timestamp . '.png', $imageData);
    ?>
<div class="result-heading">Output:</div>
<img src="<?php echo $targetPath . $timestamp ; ?>.png" width="150px"
    height="150px">
<?php
}
?>