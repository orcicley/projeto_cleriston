@extends('template')

@section('content')


<!--Inicio dos slider-->
<!--Inicio dos slider-->
<!--Inicio dos slider-->
<!--Inicio dos slider-->


<div class="banner-wrapper">
  <div id="first-slider" class="carousel fade-carousel slide">
    <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
      <!-- Overlay -->
      <div class="overlay"></div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

            <div class="item slides active">
              <div class="slide-1"><img src="images/slide1.jpg" alt="Advogados Militares"/></div>
              <div class="row">
                <div class="container">
                  <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
                    <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Dr Keen Marques</h3>
                    <h1 data-animation="animated bounceInLeft" class="">Direito <span>Militar</span></h1>
                    <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a></div>
                </div>
              </div>
            </div>

        <div class="item slides">
          <div class="slide-2"><img src="images/algema.jpg" alt="Barrister"/></div>
            <div class="row">
                <div class="container">
                    <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
                     <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Dr Keen Marques
                     </h3>
                      <h1 data-animation="animated bounceInLeft" class="">Direito <span>Criminal</span>
                      </h1>
                      <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a>
                    </div>
                </div>
            </div>
        </div>


  <!--Terceiro slider inicio-->
  <!--Terceiro slider inicio-->
  <!--Terceiro slider inicio-->
  <!--Terceiro slider inicio-->

        <!--
        <div class="item slides">
            <div class="slide-3"><img src="images/meio_mundo.jpg" alt="Barrister"/></div>
        <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
                     <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Keen Marques</h3>
                <h1 data-animation="animated bounceInLeft" class="">Direito <span>Militar</span></h1>
        <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a></div>
        --->

    <!--Terceiro slider Fim-->
    <!--Terceiro slider Fim-->
    <!--Terceiro slider Fim-->
    <!--Terceiro slider Fim-->


        </div>
      </div>
      <div class="slide-arrows"><a class="left carousel-control" href="#first-slider" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#first-slider" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
    </div>
  </div>
</div>


<!--Fim dos slider-->
<!--Fim dos slider-->
<!--Fim dos slider-->
<!--Fim dos slider-->



<!-- Banner Wrapper End --> 
<!-- Informativos Início -->
<div class="barrister-callouts-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>Informativos</h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <div class="row">
              <div class="col-sm-6">
                <div class="callouts callout-img1">
                  <h3>REFORMA<span>TRABALHISTA</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Reforma trabalhista é aprovada no Senado; confira o que muda na lei, depende de sãnção do presidente.</p>
                  <a class="btn-one" href="{{url('/informativo')}}">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img2">
                  <h3> <span>Prisão em Segunda Instância</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>A decisão valerá para todas as instâncias do Judiciário e será de cumprimento obrigatório.</p>
                  <a class="btn-one" href="javascript:void(0)">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img3">
                  <h3>Prisão em Flagrante <span></span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Trata-se de forma de cerceamento momentâneo da liberdade de quem é encontrado praticando um crime. O seu objetivo, dentre outros, é evitar a consumação ou o exaurimento </p>
                  <a class="btn-one" href="javascript:void(0)">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img4">
                  <h3><span>Crimes inafiançaveis</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>São inafiançáveis, segundo a Constituição Federal de 1988, os crimes de "tortura, o tráfico ilícito de entorpecentes e drogas afins, o terrorismo e os definidos como crimes hediondos</p>
                  <a class="btn-one" href="javascript:void(0)">Ler Mais</a> </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="consultaiton-form"> <img class="icon" src="images/logo2.png" alt="">
              <h3>Você<span>Precisa de</span> uma Consulta?</h3>
              <form>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input name="name" required class="form-control form-item" placeholder="Nome" type="text">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input name="phone" required class="form-control form-item" placeholder="Telefone" type="text">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input name="email" required class="form-control form-item" placeholder="Email" type="text">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input name="subject" required class="form-control form-item" placeholder="Assunto" type="text">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <textarea name="Message" rows="3" placeholder="Message" class="form-control form-item">                    </textarea>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button class="btn-one" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Barrister Callouts Wrapper End --> 
<!-- Barrister Experience Wrapper End -->
<div data-scroll-index="1" class="barrister-experience-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="col-sm-2">
          <div class="law-icon"><img src="images/law-icon.png" alt=""> </div>
        </div>
        <div class="col-sm-10">
          <div class="experience-text">
            <!--<h2>20 Anos de experiência <span>em Vários Casos</span></h2>-->
            <p>ESCRITÓRIO ESPECIALIZADO EM CAUSAS TRABALHISTAS, EMPRESARIAIS, CÍVEIS, CRIMINAIS, CONSUMIDOR, MILITARES, JUIZADOS ESPECIAIS E TRIBUNAIS SUPERIORES</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Barrister Experience Wrapper End --> 
<!-- Barrister Welcome Wrapper End -->
<div class="barrister-service-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>Nossos Serviços</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Trabalhista</h3>
          <p>Direito trabalhista é a área do Direito que cuida da relação entre empregados e empregadores.Criadas pela (OIT)</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Família</h3>
          <p>Direito de Família é a área do direito que estabelece e regula as normas da convivência familiar, contendo normas que abrangem .</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon3.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Bancários</h3>
          <p>O Direito Bancário é o ramo do Direito composto por regras e princípios que visam a regulamentação da atividade bancária.</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Cíveis</h3>
          <p>O Direito Civil é um dos ramos do Direito de maior abrangência, pois através de um conjunto de normas, regulamenta as relações</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>

       <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Consumidor</h3>
          <p>O Direito do Consumidor é o ramo do direito que lida com as relações jurídicas entre fornecedores de bens e serviços.</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>


       <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Prisão em Flagrante</h3>
          <p>Art. 283. Ninguém poderá ser preso senão em flagrante delito ou por ordem escrita e fundamentada da autoridade</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Audiência de Custódia</h3>
          <p>A audiência de custódia é o instrumento processual que determina que todo preso em flagrante deve ser levado à presença da autoridade.</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Assesoria Jurídica</h3>
          <p>Assessor jurídico é um especialista em determinado assunto jurídico; pessoa que presta assessoria jurídica no âmbito administrativo e jurisdicional</p>
          <a href="javascript:void(0)">Ler Mais</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Barrister Our Team Wrapper Start -->

<!--associados-->
<div class="associados_flexflex">
<div class="associados_flex">
<div class="barrister-service-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>Parceiros</h2>
    </div>
    <br>
    <br>
    <div class="row">
 <main>
  <div class="caixa_associados">
      <div class="barra1">
        <h3>Aspometerfa</h3>
      </div>
        
        <div class="logo_associados">
          <img src="images/aspometerfa_associados.png" alt="">
        </div>


      <div class="barra2">
        <a href=""><p class="barra_p">Conheça nossa História</p></a>
      </div>
  </div>

  <div class="caixa_associados">
      <div class="barra1">
        <h3>Aspometerfa</h3>
      </div>
        
        <div class="logo_associados">
          <img src="images/aspometerfa_associados.png" alt="">
        </div>


      <div class="barra2">
       <a href=""><p class="barra_p">Conheça nossa História</p></a>
      </div>
  </div>



  <div class="caixa_associados">
      <div class="barra1">
        <h3>Aspometerfa</h3>
      </div>
        
        <div class="logo_associados">
          <img src="images/aspometerfa_associados.png" alt="">
        </div>


      <div class="barra2">
        <a href=""><p class="barra_p">Conheça nossa História</p></a>
      </div>
  </div>
</main>

      
    </div>
  </div>
</div>
</div>
</div>

<!--fim associados-->

<div class="barrister-our-team-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>Nossa Equipe</h2>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="our-team-section">
          <div class="img-box"> <img src="images/dr_cleriston.png" alt="" title=""></div>
          <div class="team-info">
            <h3>Dr. Cleriston Vilhena</h3>
            <h4>
Cleriston Vilhena Advogados</h4>
            <p>Av. Fab, 195.</p>
            <div class="social-icons">
              <ul>
                <li><a href="https://web.facebook.com/cleriston.vilhena"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="our-team-section">
          <div class="img-box"> <img src="images/dr_keen.png" alt="" title=""></div>
          <div class="team-info">
            <h3>KEEN MARQUES</h3>
            <h4>
Cleriston Vilhena Advogados</h4>
            <p>Av. Fab, 195.</p>
            <p>OAB/AP 4342</p>
            <div class="social-icons">
              <ul>
                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="our-team-section">
          <div class="img-box"> <img src="images/samanta.jpg" alt="" title=""></div>
          <div class="team-info">
            <h3>SAMANTA DO NASCIMENTO</h3>
            <h4>Cleriston Vilhena Advogados</h4>
            <p>Av. Fab, 195.</p>
            <div class="social-icons">
              <ul>
                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@push('fontes')
    
@endpush