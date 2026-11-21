<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Currículo Eduardo Kraus</title>

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
                <h3>CTO / Apaixonado por Inovação / Criação de novos produtos</h3>
            </div>
        </div>
    </div>
</div>

<div class="text-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-area">
                <h2>Contato</h2>
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

                <h2>Premiações</h2>
                <p>
                    <a href="https://www.facebook.com/krausead/posts/pfbid0yPEJvDv6CMYWUkfSEiFf6W4dUXgoL8zNzFDJYbjGwK8VNHA3CRQ4LyvfqQt9gia5l"
                       target="_blank">Empresa mais digital 2020 categoria Micro porte:</a></p>
                <p>
                    <a href="https://www.facebook.com/krausead/posts/pfbid0hY8ndyercqQUscvJqvPxsNnNtFAcRYYq2xvYGzzVoEHp252Lk1DrvTaJj6WcrC8Pl"
                       target="_blank">Os melhores do Ano 2022</a></p>

                <h2>Habilidades</h2>
                <ul>
                    <li class="list-item">Desenvolvimento Moodle</li>
                    <li class="list-item">Desenvolvimento de Aplicativos</li>
                    <li class="list-item">Inteligência Artificial</li>
                    <li class="list-item">Integração de Sistemas</li>
                    <li class="list-item">Segurança em Plataformas</li>
                    <li class="list-item">Desenvolvimento de Plugins</li>
                    <li class="list-item">Integração de APIs</li>
                    <li class="list-item">Gestão de Vídeos</li>
                    <li class="list-item">Desenvolvimento de Temas</li>
                    <li class="list-item">Automação de Processos</li>
                    <li class="list-item">Gestão de Projetos de TI</li>
                </ul>
            </div>
            <div class="col-md-8 right-area">
                <section>
                    <div class="line">
                        <img src="img/icon/account_circle.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>PERFIL</h2>
                        <?php require_once "right-area-perfil.php"; ?>
                    </div>

                </section>

                <section>
                    <div class="line">
                        <img src="img/icon/work.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>EXPERIÊNCIAS</h2>

                        <?php
                        require_once "prints/Prints.php";

                        require_once "right-area-videofront.php";
                        require_once "right-area-cers.php";
                        require_once "right-area-eu.php";
                        require_once "right-area-classroom.php";
                        require_once "right-area-unisul.php";
                        ?>
                    </div>
                </section>
                <section>
                    <div class="line">
                        <img src="img/icon/school.svg">
                        <hr>
                    </div>
                    <div class="text">
                        <h2>Palestras e Eventos</h2>

                        <?php
                        require_once "palestras.php";
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</body>
</html>