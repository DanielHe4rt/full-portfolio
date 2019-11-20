<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Daniel Reis</title>

    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/circle.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta content="💻 Desenvolvedor Back, 20 anos e que curte programar em PHP" name="description">
    <!-- Android search bar color -->
    <meta content="#34495E" name="theme-color"><!-- Mobile icon -->
    <meta content="DanielHeart Portfolio" property="og:title">
    <meta content="website" property="og:type">
    <meta content="💻 Desenvolvedor Back, 20 anos e que curte programar em PHP" property="og:description">
    <meta content="Perfil de Daniel" property="og:site_name"><!-- Twitter Card data -->
    <meta content="summary_large_image" name="twitter:card">
    <meta content="@danielhe4rt" name="twitter:site">
    <meta content="DanielHeart" name="twitter:title">
    <meta content="💻 Desenvolvedor Back, 20 anos e que curte programar em PHP" name="twitter:description">
    <meta content="@danielhe4rt" name="twitter:creator">
    <meta content="DanielHeart Portfólio" itemprop="name">
    <meta content="💻 Desenvolvedor Back, 20 anos e que curte programar em PHP" itemprop="description">
</head>

<body>
<div id="root" class="container">
    <div class="profile">

        <div class="row">
            <div class="col-3">
                <img id="avatar" class="img-fluid" src="{{asset('eu.jpg')}}" alt="Foto de Daniel Reis"/>
            </div>
            <div class="col-9">
                <div class="info">
                    <h1 id="name">Daniel Reis</h1>
                    <small id="status">Pleno | Back-End</small>
                    <p id="bio">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, explicabo officiis! Quos
                        corporis eius veritatis aspernatur laborum libero, magnam illum quibusdam eaque. Eum deserunt
                        maxime
                        adipisci voluptatum in possimus omnis.
                    </p>
                    <div id="social-icons">
                        <a href="https://twitter.com/danielhe4rt" target="_blank"><i class="fa fa-twitter"
                                                                                     aria-hidden="true"></i></a>
                        <a href="https://github.com/danielhe4rt" target="_blank"><i class="fa fa-github"
                                                                                    aria-hidden="true"></i></a>
                        <a href="mailto:hey@danielheart.dev" target="_blank"><i class="fa fa-envelope"
                                                                                aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/danielheart/" target="_blank"><i
                                class="fa fa-linkedin-square"
                                aria-hidden="true"></i></a>
                        <a href="tel:+5511985863714" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        <a href="#contato" class="float-right">
                            <button type="button">Contato</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div>
        <h3 class="text-center title">Habilidades</h3>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3 circle" id="php" rel="tooltip" data-placement="top"
                 title="Entre 3-4 anos de experiência."><strong>PHP</strong></div>
            <div class="col-sm-3 circle" id="laravel" rel="tooltip" data-placement="top"
                 title="Entre 1-2 anos de experiência."><strong>LARAVEL</strong></div>
            <div class="col-sm-3 circle" id="sql" rel="tooltip" data-placement="top"
                 title="Entre 3-4 anos de experiência."><strong>SQL</strong></div>
            <div class="col-sm-3 circle" id="git" rel="tooltip" data-placement="top"
                 title="Entre 1-2 anos de experiência."><strong>GIT</strong></div>
            <div class="col-sm-3 circle" id="aws" rel="tooltip" data-placement="top"
                 title="Entre 2-3 anos de experiência."><strong>AWS</strong></div>
            <div class="col-sm-3 circle" id="rest" rel="tooltip" data-placement="top"
                 title="Entre 1-2 anos de experiência."><strong>REST</strong></div>
        </div>
    </div>

    <div>
        <h3 class="text-center title">Informações</h3>
        <div class="row">
            <div class="col-sm-6 info-card d-flex align-items-center">
                <i class="fa fa-money" aria-hidden="true"></i>
                <div>
                    <small>Salário mensal mínimo que aceito receber</small>
                    <h4>Entre R$5.000 e R$6.000</h4>
                </div>

            </div>
            <div class="col-sm-6 info-card d-flex align-items-center">
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <div>
                    <small>Tipo(s) de contrato</small>
                    <h4>PJ</h4>
                </div>
            </div>
            <div class="col-sm-6 info-card d-flex align-items-center">
                <i class="fa fa-language" aria-hidden="true"></i>
                <div>
                    <small>Nível de Inglês</small>
                    <h4>Nível avançado</h4>
                </div>
            </div>
            <div class="col-sm-6 info-card d-flex align-items-center">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <div>
                    <small>Tenho interesse em trabalhar em</small>
                    <h4>Grande empresa ou Pequena ou Média empresa ou Startup</h4>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-center title">Experiências</h3>
        <div class="row">
            <div class="col-sm-12 timeline-info">
                <div class="timeline-time">
                    <small>Duração:</small>
                    <h3>11 meses</h3>
                </div>
                <div class="timeline-description">
                    <p><strong>Pleno</strong> na empresa: <strong>Fabapp</strong> (Startup)</p>
                    <p>Principais habilidades usadas: <strong>PHP, Laravel, MySQL e Administrador de sistema</strong>
                    </p>
                    <p><strong>Descrição das atividades:</strong> Trabalhei com todas as micro-frameworks PHP feitas em
                        Lumen
                        que existem na empresa.</p>
                </div>
            </div>
            <div class="col-sm-12 timeline-info">
                <div class="timeline-time">
                    <small>Duração:</small>
                    <h3>1 ano e 6 meses</h3>
                </div>
                <div class="timeline-description">
                    <p><strong>Pleno</strong> na empresa: <strong>W1 Consultoria</strong> (Pequena ou média empresa)</p>
                    <p>Principais habilidades usadas: <strong>PHP, Laravel, MySQL e Administrador de sistema</strong>
                    </p>
                    <p><strong>Descrição das atividades:</strong> Criei todo o sistema que eles utilizam hoje para
                        gerenciamento
                        de recursos humanos e sistema para clientes.</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-center title" id="contato">Contato</h3>
        <form class="form-contact">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Daniel Reis">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="contato@danielheart.dev">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="float-right" type="submit">Enviar</button>
        </form>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='{{asset('js/circle-progress.js')}}'></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>

</html>
