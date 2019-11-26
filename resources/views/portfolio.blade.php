<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{$profile['fullname']['value']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/circle.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}"/>
    <meta content="💻 Desenvolvedor Back, 20 anos e que curte programar em PHP" name="description">
    <!-- Android search bar color -->
    <meta content="#34495E" name="theme-color"><!-- Mobile icon -->
    <meta content="DanielHeart - Portfólio" property="og:title">
    <meta content="{{$profile['picture_url']['value']}}" property="og:image">
    <meta content="website" property="og:type">
    <meta content="💻💻Desenvolvedor Back-end que curte criar Megazords com PHP" property="og:description">
    <meta content="DanielHeart - Portfólio" property="og:site_name"><!-- Twitter Card data -->
    <meta content="summary_large_image" name="twitter:card">
    <meta content="@danielhe4rt" name="twitter:site">
    <meta content="DanielHeart - Portfólio" name="twitter:title">
    <meta content="💻Desenvolvedor Back-end que curte criar Megazords com PHP" name="twitter:description">
    <meta content="@danielhe4rt" name="twitter:creator">
    <meta content="DanielHeart - Portfólio" itemprop="name">
    <meta content="💻💻Desenvolvedor Back-end que curte criar Megazords com PH" itemprop="description">
</head>

<body>
<div id="root" class="container">
    <nav class="navbar navbar-expand-md navbar-dark mb-3">
        <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
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
                @if($profile['picture_url']['enabled'])
                    <div class="avatar">
                        <img id="avatar" src="{{$profile['picture_url']['value']}}" alt="Foto de Daniel Reis"/>
                    </div>
                @endif
                @if($profile['fullname']['enabled'])
                    <h2 id="name" class="text-center">{{$profile['fullname']['value']}}</h2>
                @endif
                @if($profile['base_description']['enabled'])
                    <p class="text-center">{{$profile['base_description']['value']}}</p>
                @endif
                <div class="social-networks">
                    @if($profile['twitter_url']['enabled'])
                        <a href="{{$profile['twitter_url']['value']}}" class="social-links" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <label>Me siga no Twitter</label>
                        </a>
                    @endif
                    @if($profile['github_url']['enabled'])
                        <a href="{{$profile['github_url']['value']}}" class="social-links" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                            <label>Me siga no Github</label>
                        </a>
                    @endif
                    @if($profile['linkedin_url']['enabled'])
                        <a href="{{$profile['linkedin_url']['value']}}" class="social-links" target="_blank">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            <label>Me siga no LinkedIn</label>
                        </a>
                    @endif
                    @if($profile['email']['enabled'])
                        <a href="mailto:{{$profile['email']['value']}}" class="social-links" target="_blank">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <label>{{$profile['email']['value']}}</label>
                        </a>
                    @endif
                    @if($profile['phone_number']['enabled'])
                    <a href="tel:{{$profile['phone_number']['value']}}" class="social-links" target="_blank">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <label>{{$profile['phone_number']['value']}}</label>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9" style="border-left: 1px solid rgba(194,194,194,0.1);">
            @if($profile['about']['enabled'])
            <section id="intro">
                <h3 class="text-center title">Sobre mim</h3>
                <p id="bio" class="text-center">
                    {!! $profile['about']['value'] !!}
                </p>
            </section>
            @endif
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
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" id="inputName" name="name"
                                       placeholder="Seu nome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                       placeholder="seu@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Assunto</label>
                        <input type="text" class="form-control" id="inputSubject" name="subject"
                               placeholder="Quero cotar um freelance | Só queria dar um oi">
                    </div>

                    <div class="form-group">
                        <label for="inputMessage">Mensagem</label>
                        <textarea class="form-control" id="inputMessage" name="content" rows="3"></textarea>
                    </div>
                    <button class="float-right" style="border-radius: .25rem" type="submit">Enviar</button>
                </form>
            </section>
        </div>
    </div>

</div>
<footer class="footer">
    <p class="text-center mb-0 p-3">
        Este site se encontra no <a href="#">Github</a> para ser reutilizado. DanielHeart.dev © 2020
    </p>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
</body>

</html>
