@extends ('template')

@section('contato')

<!-- Breadcrumb Wrapper Start -->
<!--<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text">
      <h1>Contate-nos</h1>
      <div class="inner-breadcrumb">
        <ul>
          <li><a href="index.html">Início</a></li>
          <li>Contate-nos</li>
        </ul>
      </div>
    </div>
  </div>
</div>-->
<!-- Breadcrumb Wrapper End --> 
<!-- Barrister Inner page Wrapper Start -->
<div class="inner-page-wrapper contact-wrapper">
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <div class="address">
        <div class="add"><i><img src="images/map-icon.png" alt=""></i>
          <h3>Endereço <span>Av. Fab, 1995 - Central, Macapá - AP, 68900-073</span> </h3>
          </h3>
        </div>
        <div class="add m-left-40"><i><img src="images/phone-icon.png" alt=""></i>
          <h3>Telefones <span>(096) 99108-1212</span> </h3>
          </h3>
        </div>
        <div class="add m-left-80 last"><i><img src="images/email-icon.png" alt=""></i>
          <h3>EMAILS <span><a href="mailto:info@sbtechnosoft.com">cleristonvilhena@bol.com.br</a></span> </h3>
          </h3>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="contact-img"> <img src="images/.png" alt=""> </div>
    </div>
  </div>
</div>
</div>
<!-- Barrister Inner page Wrapper End --> 
<!-- Barrister Map Wrapper Start -->
<div class="map-wrapper">
  <div class="container">
   <div class="row">  
    <div class="col-sm-6">
    <div class="row">
      <form class="contact-us-form">
        <div class="form-group col-md-12 input-error">
          <input name="name" class="form-control required" placeholder="Nome Completo" type="text">
        </div>
        <div class="form-group col-md-12 input-error">
          <input name="email" class="form-control required" placeholder="Endereço de E-Mail" type="email">
        </div>
        <div class="form-group col-md-12 input-error">
          <textarea name="message" class="form-control required" placeholder="Dúvidas?"></textarea>
        </div>
        <div class="text-md-left col-md-12">
          <button type="submit" class="btn-one">Enviar Mensagem</button>
        </div>
      </form>
    </div></div>
    <div class="col-sm-6">
    <div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8172853916244!2d-51.06981816383579!3d0.041268728068798485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d61e116e54fc573%3A0xcaf7f21060e23bb2!2sCleriston+Vilhena+Advogados!5e0!3m2!1spt-BR!2sbr!4v1536474380721" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
    </div>
  </div></div>
</div>
<!-- Barrister Map Wrapper End --> 
<!-- Barrister CTA Wrapper end -->
<div class="barrister-cta-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-9">
        <h3>Nós disponibilizamos vários serviços para militares!</h3>
        <p>Se você tem algum interesse mande um e-mail para um de nossos atendentes para que nós possamos ajudá-lo a resolver seu caso.</p>
      </div>
      <div class="col-sm-4 col-md-3"> <a href="javascript:void(0)" class="btn-one pull-right">Vamos Lá</a> </div>
    </div>
  </div>
</div>
<!-- Barrister CTA Wrapper end --> 

@endsection