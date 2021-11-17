<?php
$fname = $password = $country = $subject = $errormsg = $classname = '...';

if(isset($_POST['btnSubmit'])){
    $fname = $_POST['fullname'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    if($fname == '' or $password == '' or $confirm == '' or $country == '' or $subject == ""){
        $errormsg = "<div class='error-msg'>Please fill all fields</div>";
    } else if (strlen($password) < 6){
        $errormsg = "<div class='error-msg'>Password is too short</div>";
    }
    else if(ctype_lower($password)){
        $errormsg = "<div class='error-msg'>Password should contain at least one Uppercase</div>";
    }
    else if ($password != $confirm){
        $errormsg = "<div class='error-msg'>Passwordks don't match</div>";
    }
    else{
        $classname = "iyke";
        $errormsg = "<div class='error-msg'>Congratulations</div>";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea, input[type=password] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        .hide{
            display: none;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }
        .error-msg{
            background-color: tomato;
            color: white;
            font-weight: bold;
            font-family: Montserrat;
            text-align: center;
            padding: 10px;
            border: 2px solid darkred;
            border-radius: 10px;
        }
        .iyke{
            display: block;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }


    </style>
</head>
<body>

<div class="hide <?php echo $classname?>">
    <table>
        <tr>
            <th>Fullname</th>
            <th>Password</th>
            <th>Country</th>
            <th>Subject</th>
        </tr>
        <tr>
            <td><?php echo $fname; ?></td>
            <td><?php echo $password; ?></td>
            <td><?= $country; ?></td>
            <td><?= $subject; ?></td>
        </tr>
    </table>
</div>

<?= $errormsg; ?>
</body>
</html>
