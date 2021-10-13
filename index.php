<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('site_name')?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<section id="menu">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-md-flex justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#importancia">O curso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#parceiros">Parceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#modulos">Módulos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#professores">Professores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#cta">Inscreva-se</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="apresentacao">
        <div class="container white">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/pessoa-frame-1.png" alt="" />
                </div>
                <div class="col-12 col-md-6">
                <div class="hero-content">
                        <h3>ABBC apresenta:</h3>
                        <h1>PROGRAMA DE <b>LIDERANÇA FEMININA</b></h1>
                        <p>Em parceria com Fin4She e Center for Leadership Studies do Brasil</p>
                        <p class="formacao">Formação personalizada para mulheres que buscam transformar a sua posição no mercado financeiro e corporativo</p>
                    </div>
                </div>
            </div>
            <div class="row py-5 vagas">
                <div class="col-md-6 text-center vagas">VAGAS LIMITADAS</div>
                <div class="col-md-6 text-center descontos">DESCONTOS ESPECIAIS PARA ASSOCIADOS ABBC</div>
            </div>
        </div>
        <div class="container link-cta">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a class="cta" href="https://conteudos.abbc.org.br/formulario_lideranca_feminina">INSCREVA-SE</a>
                </div>
            </div>
        </div>
    </section>

    <section id="importancia">
        <div class="container max">
            <div class="row">
                <div class="col-12 col-md-6 d-md-flex align-items-center">
                    <h2>A importância do curso</h2>
                </div>
                <div class="col-12 col-md-6 o-curso">
                    <p>Embora cada vez mais preparadas, as mulheres no Brasil ocupam apenas 37,4% dos cargos gerenciais, segundo os dados IBGE.</p>
                    <p>O Programa de Liderança Feminina da Associação Brasileira de Bancos visa apoiar o desenvolvimento do protagonismo das mulheres, com embasamento técnico e comportamental.</p>
                    <p>Sob a chancela da ABBC e a curadoria da consultoria Fin4She e do Center for Leadership Studies do Brasil, o curso traz módulos com grandes especialistas, cases e interação entre as participantes.</p>
                </div>
            </div>
            <div class="row justify-content-around icones">
                <div class="col-12 col-md-3 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icone1.png" alt="">
                    <p>Imersão com especialistas de mercado</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icone2.png" alt="">
                    <p>Networking entre executivas</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icone3.png" alt="">
                    <p>Disciplinas técnicas e comportamentais</p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icone4.png" alt="">
                    <p>Certificado ABBC</p>
                </div>
            </div>
        </div>
    </section>

    <section id="parceiros">
        <div class="container max">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-md-flex align-items-start flex-column justify-content-center">
                    <h2>Parceiros</h2>
                    <p>Nosso conteúdo programático foi desenhado em parceria com dois centros de referência em liderança:</p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/FINASHE.png" alt="" />
                    <p>Plataforma para quem busca se conectar com a equidade de gênero de uma forma inspiradora.  A Fin4She acredita que a capacitação é o caminho para atingirmos os patamares desejados. Quando as mulheres assumem cargos de liderança é muito importante que se sintam preparadas e conectadas com este papel, pois como líderes estão constantemente influenciando, impactando e inspirando pessoas.</p>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/CLS_BRASIL.png" alt="" />
                    <p>Centro de soluções, difusão e estudos de liderança, usa o modelo de Liderança Situacional – criado pelo Dr. Paul Hersey, aplicado em mais de 14 milhões de líderes em todo o mundo e implantado em mais de 70% das empresas Fortune 500 (EUA), com aproximação prática e flexível.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="modulos">
        <div class="header">
            <p>MÓDULOS</p>
        </div>
        <div class="programa">
            <div class="container max nosso-programa">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Nosso programa está disponível em dois níveis:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max info-modulos">
            <div class="row">
                <div class="col-12 col-md-6 modulo-1 d-md-flex align-items-start flex-column justify-content-center order-one">
                    <h2>Liderança Nível 1<br>20 horas</h2>
                    <p class="info">Ideal para profissionais com até cinco anos de experiência em gestão de pessoas</p>
                    <p class="date">Início do curso: 8 de novembro</p>
                    <a href="https://drive.google.com/file/d/19tRUWLaT5wOLfB_FDvSC_RpAceP3gzWz/view?usp=sharing" target="_blank" class="horarios">CONFIRA O CRONOGRAMA</a>
                </div>
                <div class="col-12 col-md-6 modulo-info order-two">

                    <p class="titulo">Personal branding</p>
                    <p class="descricao">Construindo e fortalecendo sua marca pessoal</p>

                    <p class="titulo">Eneagrama</p>
                    <p class="descricao">O poder do autoconhecimento</p>

                    <p class="titulo">Poder da comunicação assertiva e Comunicação Não Violenta (CNV) </p>
                    <p class="descricao">Utilizando a comunicação a seu favor</p>

                    <p class="titulo">Protagonismo-você na liderança da sua vida </p>
                    <p class="descricao">Ampliando a autoconsciência</p>

                    <p class="titulo">Liderança do futuro</p>
                    <p class="descricao">A pluralidade do papel das novas lideranças</p>

                    <p class="titulo">Equidade na prática</p>
                    <p class="descricao">Expandindo a visão da equidade</p>

                    <p class="titulo">Preparação para utilizar o modelo Liderança Situacional® </p>
                    <p class="descricao">Aprimorando a habilidade de Diagnóstico, Adaptabilidade, Comunicação e Gestão</p>

                    <p class="titulo">Feedback e Produtividade</p>
                    <p class="descricao">Avaliando os resultados sobre dar e receber feedback e o conceito de meta SMART</p>

                    <p class="titulo">Trabalhando os indicadores Maturidade e Situação. Apresentação do Modelo Liderança Situacional</p>
                    <p class="descricao">Mudanças no ambiente físico, psicossocial e nos métodos e curva prescritiva de Liderança Situacional</p>

                    <p class="titulo">Análise dos formulários e pesquisas a partir do trabalho preparatório</p>
                    <p class="descricao">Elaboração do Plano de Ação, de aplicação imediata</p>


                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 modulo-info order-four">

                    <p class="titulo">Personal branding</p>
                    <p class="descricao">Construindo e fortalecendo sua marca pessoal</p>

                    <p class="titulo">Poder da comunicação assertiva e Comunicação Não Violenta (CNV) </p>
                    <p class="descricao">Utilizando a comunicação a seu favor</p>

                    <p class="titulo">Protagonismo-você na liderança da sua vida </p>
                    <p class="descricao">Ampliando a autoconsciência</p>

                    <p class="titulo">Liderança do futuro</p>
                    <p class="descricao">A pluralidade do papel das novas lideranças</p>

                    <p class="titulo">Equidade na prática</p>
                    <p class="descricao">Expandindo a visão da equidade</p>

                    <div class="destaque">
                        <p class="titulo">Design your life</p>
                        <p class="descricao">Pensando a carreira dentro da sua vida + assessment pessoal (MPP)</p>
                    </div>

                    <p class="titulo">Preparação para utilizar o modelo Liderança Situacional®</p>
                    <p class="descricao">Aprimorando a habilidade de Diagnóstico, Adaptabilidade, Comunicação e Acompanhamento</p>

                    <p class="titulo">A arte de dar e receber feedback e como trabalhar a Produtividade</p>
                    <p class="descricao">Avaliando os resultados sobre dar e receber feedback e o conceito de meta SMART</p>

                    <p class="titulo">Trabalhando os indicadores Maturidade e Situação</p>
                    <p class="descricao">Conceito de metas smart; motivação, como trabalhar esta energia; e trabalhando com os resultados do motivograma</p>

                    <p class="titulo">Trabalhando o indicador Situação e apresentação do modelo Liderança Situacional</p>
                    <p class="descricao">Mudanças no ambiente físico, psicossocial e nos métodos; e curva prescritiva do modelo Liderança Situacional</p>
                    
                    <p class="titulo">Aplicação de conceitos</p>
                    <p class="descricao">Estilo de Liderança x Maturidade do liderado para as tarefas e negociando o estilo de liderança com o liderado</p>
                    
                    <p class="titulo">Análise dos formulários e pesquisas a partir do trabalho preparatório</p>
                    <p class="descricao">Elaboração de plano de ação e avaliação da eficácia do aprendizado</p>


                </div>
                <div class="col-12 col-md-6 modulo-2 d-md-flex align-items-start flex-column justify-content-center order-tree">
                    <h2>Liderança Nível 2<br>24 horas</h2>
                    <p class="info">Ideal para profissionais com mais de cinco anos de experiência em gestão de pessoas</p>
                    <p class="date">Início do curso: 3 de novembro</p>
                    <div class="w-100">
                        <a href="https://drive.google.com/file/d/19tRUWLaT5wOLfB_FDvSC_RpAceP3gzWz/view?usp=sharing" target="_blank" class="horarios">CONFIRA O CRONOGRAMA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="professores">
        <div class="header">
            <p>Conheça os convidados</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="slides">
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/alexandra.png" alt="">
                            <p class="nome">Álexandra Làssance</p>
                            <p class="funcao">Consultora de diversidade e inclusão e designer organizacional de carreiras</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/anacarnauba.png" alt="">
                            <p class="nome">Ana Carnaúba</p>
                            <p class="funcao">Head da D. Influencers Univ. Corporativa da Deloitte para Mercado no Brasil</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/andre.png" alt="">
                            <p class="nome">André Guimarães</p>
                            <p class="funcao">Fundador do Instituto Brasileiro de Eneagrama – IBETH</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/annamoreno.png" alt="">
                            <p class="nome">Anna Moreno</p>
                            <p class="funcao">Gerente global de marketing no BCG e especialista em personal branding</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/carolina.png" alt="">
                            <p class="nome">Carolina Cavenaghi</p>
                            <p class="funcao">Co-fundadora da Fin4She</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/luana.png" alt="">
                            <p class="nome">Luana Ozemela</p>
                            <p class="funcao">CEO da DIMA</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/ramiro.png" alt="">
                            <p class="nome">Ramiro Novak Filho</p>
                            <p class="funcao">Administrador de empresas e “Resultador” de companhias no Brasil, Portugal e na Argentina</p>
                        </div>
                        <div class="slide text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/prof/sabrinamello.png" alt="">
                            <p class="nome">Sabrina Mello</p>
                            <p class="funcao">Fonoaudióloga, coaching de comunicação e sócia-diretora da ArtInsight</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="valor">
        <div class="container max">
            <div class="row">
                <div class="col-12 col-md-6 d-md-flex align-items-start flex-column justify-content-center condicoes">
                    <p>Condições de pagamento</p>
                </div>
                <div class="col-12 col-md-6 d-md-flex align-items-start flex-column justify-content-center valores">
                    <h2>INVESTIMENTO</h2>
                    <div class="nivel">
                        <p><b>Nível 1</b></p>
                        <p>Preço <b>Associado</b>: R$ 2.300,00</p>
                        <p>Preço <b>Não Associado</b>: R$ 3.800,00</p>
                    </div>
                    <div class="nivel">
                        <p><b>Nível 2</b></p>
                        <p>Preço <b>Associado</b>: R$ 3.400,00</p>
                        <p>Preço <b>Não Associado</b>: R$ 4.900,00</p>
                    </div>
                    <h2>FORMAS DE PAGAMENTO<br>DISPONÍVEIS:</h2>
                    <p>Boleto Bancário</p>
                    <p>Cartão de Crédito</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta">
        <div class="container max">
            <div class="row">
                <!-- <div class="col-12 col-md-6 d-md-flex align-items-start flex-column justify-content-end">
                    <a class="download" href="">BAIXE AQUI A BROXURA DO CURSO</a>
                </div> -->
                <div class="col-12 col-md-12 d-flex align-items-center flex-column justify-content-center form">
                    <p>FAÇA SUA INSCRIÇÃO</p>
                    <a href="https://conteudos.abbc.org.br/formulario_lideranca_feminina" target="_blank" class="inscrevase">INSCREVA-SE</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container max">
            <div class="row justify-content-center">
                <div class="col-12 col-md-11">
                    <div class="row">
                        <div class="col-12 col-md-3 endereco">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                        <p>Endereço:</p>
                        <p>Avenida Paulista, 1842 - 15º Conj. 156 Cerqueira César - 01310-923 São Paulo - SP</p>
                    </div>
                    <div class="col-12 col-md-3 inst text-center">
                        <h3>INSTITUCIONAL</h3>
                        <p>
                            <a href="https://www.abbc.org.br/quem-somos" target="_blank">Quem somos</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-3 inst text-center">
                        <h3>EDUCAÇÃO EXECUTIVA</h3>
                        <p>
                            <a href="https://www.abbc.org.br/cursos" target="_blank">Cursos</a>
                        </p>
                        <p>
                            <a href="https://www.abbc.org.br/cursos-in-company">Cursos In Company</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-3 inst text-center">
                        <h3>FALE CONOSCO</h3>
                        <p> <a href="<?= get_permalink( get_page_by_title( 'POLÍTICA DE PRIVACIDADE E COOKIES' ) )?>" target="_blank"> Políticas de Privacidade</a></p>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>