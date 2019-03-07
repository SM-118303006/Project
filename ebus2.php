<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

?>

<!DOCTYPE html>
<html>
    <head>
         <link href='https://fonts.googleapis.com/css?family=Saira Semi Condensed' rel='stylesheet'>
        <style>
            body {
            font-family: 'Saira Semi Condensed';
            font-size: 30px;
            background-color: blanchedalmond;
            }
            
        </style>
        <title>Payment Details</title>
    </head>
    <body>
    <script type="text/javascript">
        function validateForm() {
            var x = document.forms["Details"]["txtName"].value;
            if (x === "") {
                alert("Please fill out all payment details")
                return false;
            }
        }
        </script>
    <div class="form">
        <form name="Details" method="post" action="eBus3.php">
            <center>
             <h1>Enter in your details below</h1>  
        <hr/>
                <table cellspacing="10">
                    
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="txtName" name="txtName" value="" /></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                    </tr>
                    <tr>
                        <td>PIN</td>
                        <td><input type="text" id="txtPassword" name="txtPassword" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                    </tr>
                </table>
            </center>
            
            <center>
                
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed with Purchase"/>
                 <input type="button" name="btnValidate" id="btnValidate" onclick="validateForm()" value="Validate"/>
            </center>
    </div>
</form>
    </body>
    </html>
    
            
                
                    
                 



