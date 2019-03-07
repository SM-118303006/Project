<!DOCTYPE html>
        <html>
            <head>
                <title>Purchase Receipt</title>
                 <link href='https://fonts.googleapis.com/css?family=Saira Semi Condensed' rel='stylesheet'>
        <style>
            body {
            font-family: 'Saira Semi Condensed';
            font-size: 30px;
            background-color: blanchedalmond;
            }
            
        </style>
            </head>
            <body>
            <center>
                <h1>Purchase Receipt</h1>
                <hr/>
    <?php
    session_start();
    
    $totalValue = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    $numberValue = $_POST['txtNum'];
    echo "Name: ".$fullNameValue.".";
    echo "<br></br>";
    echo "Phone Number: ".$numberValue.".";
    echo "<br></br>";
    echo "Total Price: $ ".$totalValue.".";
    ?>
            </center>
    </body>
        </html>




