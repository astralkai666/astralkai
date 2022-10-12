<!-- <?php

if(filter_has_var(INPUT_POST, 'submit')) {

    $_name = htmlspeacialchars($_POST['name']);
    $_email = htmlspeacialchars($_POST['email']);
    $_subject = htmlspeacialchars($_POST['subject']);
    $_msg = htmlspeacialchars($_POST['msg']);

    if(!empty($_name) && !empty($_email) && !empty($_subject) && !empty($_msg)) {

        $_astral = 'astralkai666@gmail.com';
        $_about = "Contact Request From ${$_name}";
        $_body = "
            <h3>Contact Request</h3>
            <h4>Name</h4><p>${$_name}</p>
            <h4>Email</h4><p>${$_email}</p>
            <h4>Subject</h4><p>${$_subject}</p>
            <h4>Message</h4><p>${$_msg}</p>
        ";

        $_headers = "MIME-Version: 1.0 ${\r\n}";
        $_headers .= "Content-Type: text/html; charset=UTF8 ${\r\n}";
        $_headers .= "From ${$_name} ${$_email} ${\r\n}";

        mail($_astral, $_subject, $_msg, $headers);

    }
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paul Simalumba aka Astral Kai"/>
    <meta name="description" content="Web Developer and Graphic Designer."/>
    <meta name="keywords" content="Astral Kai, AstralKai666, AK666, Paul Simalumba, Simalumba, graphic designer, graphic designer Botswana, freelance graphic designer, freelance graphic designer Botswana, graphic artist"/>
    <link rel="shortcut icon" type="img/jpg" href="imgs/ico.jpg"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <title>Paul Simalumba | Coding & Art!</title>
</head>
<body>
    <?php require_once 'inc/app.php'; ?>

    <script src="js/index.js"></script>
</body>
</html>