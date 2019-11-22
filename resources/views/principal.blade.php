@extends('template')

@section('content')


<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
  <div id="first-slider" class="carousel fade-carousel slide">
    <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
      <!-- Overlay -->
      <div class="overlay"></div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item slides active">
          <div class="slide-1"><img src="images/about-video-wrapper-bg.jpg" alt="Advogados Militares"/></div>
          <div class="row">
            <div class="container">
              <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
                <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Keen Marques</h3>
                <h1 data-animation="animated bounceInLeft" class="">Direito <span>Militar</span></h1>
                <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a></div>
            </div>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"><img src="images/justica.jpg" alt="Barrister"/></div>
          <div class="row">
            <div class="container">
              <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
               <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Keen Marques</h3>
                <h1 data-animation="animated bounceInLeft" class="">Direito <span>Militar</span></h1>
                <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a></div>
            </div>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"><img src="images/banner3.jpg" alt="Barrister"/></div>
          <div class="hero"> <img class="icon" data-animation="animated bounceInLeft" src="images/logo2.png" alt="">
            <h3 data-animation="animated bounceInLeft" class="">Dr Cleriston Vilhena & Keen Marques</h3>
                <h1 data-animation="animated bounceInLeft" class="">Direito <span>Militar</span></h1>
            <a class="btn-one" data-animation="animated bounceInLeft" href="javascript:void(0)">Consulta Agendada</a></div>
        </div>
      </div>
      <div class="slide-arrows"><a class="left carousel-control" href="#first-slider" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#first-slider" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
    </div>
  </div>
</div>
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
                  <h3>CORPORATIVAS E <span>LEIS COMERCIAIS</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor molestie tincidunt</p>
                  <a class="btn-one" href="{{url('/informativo')}}">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img2">
                  <h3>Leis <span>Previdenciárias</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor molestie tincidunt</p>
                  <a class="btn-one" href="javascript:void(0)">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img3">
                  <h3>Banking and <span>Finance</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor molestie tincidunt</p>
                  <a class="btn-one" href="javascript:void(0)">Ler Mais</a> </div>
              </div>
              <div class="col-sm-6">
                <div class="callouts callout-img4">
                  <h3>LIQUIDATION and <span>INSOLVENCY</span></h3>
                  <span class="callouts-line"><img src="images/callouts-line.png" alt=""></span>
                  <p>Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor molestie tincidunt</p>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Família</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">ler mais...</a>
          <div class="icon-box"><img src="images/service-item-icon2.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Bancários</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Ler mais...</a>
          <div class="icon-box"><img src="images/service-item-icon3.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Cíveis</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>

       <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Consumidor</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>


       <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Prisão em Flagrante</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Audiência de Custódia</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon5.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>Assesoria Jurídica</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="javascript:void(0)">Read More</a>
          <div class="icon-box"><img src="images/service-item-icon6.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Barrister Our Team Wrapper Start -->

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
<!-- Barrister Our Team Wrapper end --> 

<!-- Barrister Video Wrapper begin 
<div class="barrister-video-wrapper">
  <div class="container">
     <div class="title"> <span class="title-border-img"><img src="images/h1-line-img-white.png" alt=""></span>
      <h2 style="color: white">Video de Eventos</h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="video-wrapper"> <a href="https://www.youtube.com/watch?v=MWjk8asP2e8" class="btn btn-default" data-popup="video"> <img src="images/video-img.jpg" alt=""> </a> </div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="testimonials-wrapper">
          <div id="our-testimonials" class="owl-carousel owl-theme">
            <div class="item">
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials1.png" alt=""> </div>
                <div class="test-quote">
                  <p>Nos reunimos em conferência na semana passada e fizemos uma viagem para adquirir mais conhecimento no assunto .</p>
                  <h3>CONFERÊNCIAS | REUNIÃO</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials2.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>SAMUEL MORRIS | PARALEGAL</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials3.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>MAYA ANGELOU | LAW CLERK</h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials1.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>ELLEN G. WHITE | SECRET SERVICE</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials2.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>SAMUEL MORRIS | PARALEGAL</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials3.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>MAYA ANGELOU | LAW CLERK</h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials1.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>ELLEN G. WHITE | SECRET SERVICE</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials2.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>SAMUEL MORRIS | PARALEGAL</h3>
                </div>
              </div>
              <div class="testimonials-inner">
                <div class="testmonials-pic"> <img src="images/testimonials3.png" alt=""> </div>
                <div class="test-quote">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,pisci velit, sed quia non .</p>
                  <h3>MAYA ANGELOU | LAW CLERK</h3>
                </div>
              </div>
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