<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Eduardo Kraus's Curriculum Vitae</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900|Montserrat:100,200,300,400,500,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="nav-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 img-area">
                <img src="img/profile-image.jpg">
            </div>
            <div class="col-md-8 title-area">
                <h1>Eduardo Kraus</h1>
                <h3>CTO / Passionate about Innovation / New Product Development</h3>
            </div>
        </div>
    </div>
</div>

<div class="text-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-area">
                <h2>Contact</h2>
                <div class="list-item df">
                    <img src="img/icon/phone.svg">
                    <a href="https://api.whatsapp.com/send?phone=+5548984968843" target="_blank">
                        (48) 9 8496-8843</a>
                </div>
                <div class="list-item df">
                    <img src="img/icon/email.svg">
                    <span>kraus@duardokraus.com</span>
                </div>
                <div class="list-item df">
                    <img src="img/icon/location_on.svg">
                    <span>São Bonifácio / SC</span>
                </div>
                <div class="list-item df">
                    <img src="img/icon/github.svg">
                    <a href="https://github.com/EduardoKrausME" target="_blank">github.com/EduardoKrausME</a>
                </div>
                <div class="list-item df">
                    <img src="img/icon/linkedin.svg">
                    <a href="https://www.linkedin.com/in/eduardokraus" target="_blank">linkedin.com/eduardokraus</a>
                </div>

                <h2>Awards</h2>
                <p>
                    <a href="https://www.facebook.com/krausead/posts/pfbid0yPEJvDv6CMYWUkfSEiFf6W4dUXgoL8zNzFDJYbjGwK8VNHA3CRQ4LyvfqQt9gia5l"
                       target="_blank">Most Digital Company 2020, Micro category:</a></p>
                <p>
                    <a href="https://www.facebook.com/krausead/posts/pfbid0hY8ndyercqQUscvJqvPxsNnNtFAcRYYq2xvYGzzVoEHp252Lk1DrvTaJj6WcrC8Pl"
                       target="_blank">Best of the Year 2022</a></p>

                <h2>Skills</h2>
                <ul>
                    <li class="list-item">Moodle Development</li>
                    <li class="list-item">App Development</li>
                    <li class="list-item">Artificial Intelligence</li>
                    <li class="list-item">Systems Integration</li>
                    <li class="list-item">Platform Security</li>
                    <li class="list-item">Plugin Development</li>
                    <li class="list-item">API Integration</li>
                    <li class="list-item">Video Management</li>
                    <li class="list-item">Theme Development</li>
                    <li class="list-item">Process Automation</li>
                    <li class="list-item">IT Project Management</li>
                </ul>
            </div>
            <div class="col-md-8 right-area">
                <section>
                    <div class="line">
                        <img src="img/icon/account_circle.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>PROFILE</h2>
                        <?php require_once "right-area-perfil.php"; ?>
                    </div>

                </section>

                <section>
                    <div class="line">
                        <img src="img/icon/work.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>EXPERIENCE</h2>

                        <?php
                        require_once "prints/Prints.php";

                        require_once "right-area-videofront-en.php";
                        require_once "right-area-cers-en.php";
                        require_once "right-area-eu-en.php";
                        require_once "right-area-classroom-en.php";
                        require_once "right-area-unisul-en.php";
                        ?>
                    </div>
                </section>
                <section>
                    <div class="line">
                        <img src="img/icon/school.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>Talks and Events</h2>

                        <?php
                        require_once "palestras-en.php";
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

</body>
</html>