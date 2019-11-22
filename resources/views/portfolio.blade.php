<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Daniel Reis</title>

    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/circle.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
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
    <nav class="navbar navbar-expand-md navbar-dark mb-3">
        <a class="navbar-brand" href="#">danielheart.dev</a>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fa fa-home"></i> Portfólio </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fa fa-file"></i> Resumo</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <div class="sticky-top pt-5 sidebar">
                <div class="avatar">
                    <img id="avatar" src="{{asset('eu.jpg')}}" alt="Foto de Daniel Reis"/>
                </div>
                <h2 id="name" class="text-center">Daniel Reis</h2>
                <p class="text-center">Pleno | Back-End</p>
                <div class="social-networks">
                    <a href="https://twitter.com/danielhe4rt" class="social-links" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <label>Me siga no Twitter</label>
                    </a>
                    <a href="https://github.com/danielhe4rt" class="social-links" target="_blank">
                        <i class="fa fa-github" aria-hidden="true"></i>
                        <label>Me siga no Github</label>
                    </a>
                    <a href="https://www.linkedin.com/in/danielheart/" class="social-links" target="_blank">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <label>Me siga no LinkedIn</label>
                    </a>
                    <a href="mailto:hey@danielheart.dev" class="social-links" target="_blank">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <label>hey@danielheart.dev</label>
                    </a>
                    <a href="tel:+5511985829611" class="social-links" target="_blank">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <label>+ 55 11 985829611</label>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9" style="border-left: 1px solid rgba(194,194,194,0.1);">
            <section id="intro">
                <h3 class="text-center title">Sobre mim</h3>
                <p id="bio" class="text-center">
                    Profissional com experiência em criação de aplicações RESTFul com PHP e Lumen Framework. No tempo livre, livestreamer pela <a href="https://twitch.tv/danielhe4rt" target="_blank">Twitch.tv</a> com conteúdo sobre programação e criador/mentor do projeto
                    <a href="https://heartdevs.com" target="_blank">He4rt Developers</a>, uma comunidade de programadores que incita novos programadores a ensinar e colaborar em projetos open source.
                </p>
            </section>
            <section id="skills">
                <h3 class="text-center title">Habilidades</h3>
                <p class="text-center">Abaixo estão as ferramentas que já trabalhei ao decorrer da minha carreira,
                    informando o tempo de uso das mesmas:</p>
                <div class="row d-flex justify-content-center">
                    @foreach(\App\Entities\Skill\Skill::all() as $skill)
                        <span class="badge badge-pill badge-{{$skill->type->slug}} badge-custom"
                              data-toggle="tooltip" data-placement="bottom" title=""
                              data-original-title="{{$skill->time->name}}"
                        >{{$skill->name}}</span>
                    @endforeach
                </div>
            </section>

            <section id="whereiwork">
                <h3 class="text-center title">Experiências</h3>
                <div class="row">
                    <div class="col-sm-12 timeline-info">
                        <div class="timeline-time">
                            <small>Empresa:</small>
                            <h4>Fabapp</h4>
                            <small>Duração:</small>
                            <h5 class="base-purple">11 meses</h5>

                        </div>
                        <div class="separator"></div>
                        <div class="timeline-description">
                            <p>Principais habilidades usadas: <strong>PHP, Laravel, MySQL e Administrador de
                                    sistema</strong>
                            </p>
                            <p>
                                <strong>Descrição das atividades:</strong>
                                Na Fabapp realizei o desenvolvimento de algumas das principais micro-aplicações que
                                sustentam a plataforma, onde utilizei de algumas técnologias interessantes como: Lumen
                                (Laravel Framework), AWS (S3 e EC2) e controlando deploys com o Laravel Forge.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 timeline-info">
                        <div class="timeline-time">
                            <small>Empresa:</small>
                            <h4>W1 Consultoria</h4>
                            <small>Duração:</small>
                            <h5 class="base-purple">1 ano e 6 meses</h5>
                        </div>
                        <div class="separator"></div>

                        <div class="timeline-description">

                            <p>Principais habilidades usadas: <strong>PHP, Laravel, MySQL e Administrador de
                                    sistema</strong>
                            </p>
                            <p><strong>Descrição das atividades:</strong>
                                Na W1 Finance realizei a criação de sistemas de gerenciamento para os autônomos da
                                empresa e também o sistema interno de gerenciamento do Back-office utilizando de
                                tecnologias como: Laravel, Bootstrap 4 AWS (EC2, S3) e Ionic.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <h3 class="text-center title" id="contato">Contato</h3>
                <form class="form-contact">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Seu nome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="seu@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Assunto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Quero cotar um freelance | Só queria dar um oi">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="float-right" style="border-radius: .25rem" type="submit">Enviar</button>
                </form>
            </section>
        </div>
    </div>

</div>
<footer class="footer">
    <p class="text-center mb-0 p-3">
        Este site se encontra no <a href="#">Github</a> para ser reutilizado.  DanielHeart.dev © 2020
    </p>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='{{asset('js/circle-progress.js')}}'></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
