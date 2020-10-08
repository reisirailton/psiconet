@extends('layouts.master')
@section('title', 'Faq Psicologo')
    
@section('content')
<div class="container pt-5 mt-5">
    <div class="row d-flex justify-content-center py-3">
            <h1>Como Funciona</h1>
    </div>
</div>
<!--Section seja Psicólogo inicio-->
<section class="psicologo-duvida py-3">
      <div class="container">
          <div class="text-center py-3">
            <h2>Como faço para fazer parte?</h2>
          </div>
          <div class="py-4 mx-5">
            <div class="row d-flex flex-column">
              <div class="col-lg-6 col-md-8 col-sm-12 py-4 d-flex">
                <div class="round-numero flex-fill">
                  <p class="numero">1</p>
                </div>
                <div class="numero-text mx-3 flex-">
                  <h3>Cadastro</h3>
                  <p>Insira no cadastro as suas informações pessoais e profissionais</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 col-sm-12 py-4 d-flex ">
                <div class="round-numero flex-fill">
                  <p class="numero">2</p>
                </div>
                <div class="numero-text mx-3 flex-fill">
                  <h3>Pagamento de plano</h3>
                  <p>Escolha o melhor plano para você e realize o pagamento através do cartão de crédito ou
                    boleto.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 col-sm-12 py-4 d-flex">
                <div class="round-numero">
                  <p class="numero">3</p>
                </div>
                <div class="numero-text mx-3">
                  <h3>Aprovação</h3>
                  <p>Vamos checar seus dados em até 2 dia úteis</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 col-sm-12 py-4 d-flex flex-1">
                <div class="round-numero">
                  <p class="numero">4</p>
                </div>
                <div class="numero-text mx-3">
                  <h3>Seu Perfil está pronto</h3>
                  <p>Seu perfil estará disponível para os pacientes</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-5"><button type="button" class="btn btn-primary btn-lg btn-block py-0 w-50 m-auto"
              id="btn"><a class="nav-link" href="/register">Quero aderir</a></button></div>
        </div>
      </div>
    </section>
    
    <!-- INICIO PERGUNTAS FREQUENTES -->

    <div class="container custom-duvidas" id="duvidas">
            <div class="text-center">
                <h2 class="mb-2">Perguntas Frequentes</h2>
                <h4 class="mb-2">Veja porque ser um psicólogo na Psiconet</h4>
            </div>
            <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas" role="button" aria-expanded="false" aria-controls="collapseDuvidas">
                Plataforma é segura ?
                </a>  
                
            
                <div class="collapse" id="collapseDuvidas">
                    <div class="px-3 text-left">
                        <p>
                        Sim. Em primeiro lugar, seus dados serão tratados de maneira confidencial. Todos os dados são criptografados e utilizamos o certificado de segurança.
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="row px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas1" role="button" aria-expanded="false" aria-controls="collapseDuvidas1">
                Vou receber lembretes dos meus agendamentos ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas1" aria-expanded="false" aria-controls="collapseDuvidas1">
                </div>
            
                <div class="collapse" id="collapseDuvidas1">
                    <div class="px-3 text-left">
                        <p>
                        Sim, tanto o paciente quanto o respectivo psicólogo recebem um aviso no e-mail com os detalhes do agendamento assim que a sessão for confirmada. O e-mail de confirmação só é enviado quando o pagamento é autorizado dessa forma garantimos o recebimento por parte do psicólogo. 
                        
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas2" role="button" aria-expanded="false" aria-controls="collapseDuvidas2">
                Serei avaliado pelos meus pacientes ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas2" aria-expanded="false" aria-controls="collapseDuvidas2">
                </div>
            
                <div class="collapse" id="collapseDuvidas2">
                    <div class="px-3 text-left">
                        <p>
                        Sim, após a realização do serviço, o paciente avalia o psicólogo. Prestar um serviço de qualidade é fundamental para ser bem avaliado. 
                        </p>
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas3" role="button" aria-expanded="false" aria-controls="collapseDuvidas3">
                Qual o valor da consulta ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas3" aria-expanded="false" aria-controls="collapseDuvidas3">
                </div>
            
                <div class="collapse" id="collapseDuvidas3">
                    <div class="px-3 text-left">
                        <p>
                        Os valores de consulta são definidos pelos psicólogos e variam de acordo com cada profissional.
                        </p>
                    </div>
                </div>
            </div>
        
                   <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas4" role="button" aria-expanded="false" aria-controls="collapseDuvidas4">
                O que são as taxas transacionais ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas4" aria-expanded="false" aria-controls="collapseDuvidas4">
                </div>
            
                <div class="collapse" id="collapseDuvidas4">
                    <div class="px-3 text-left">
                        <p>
                        As taxas transacionais são os custo da operação financeira (processamento do pagamento no momento do agendamento) e custo de hospedagem/manutenção de página profissional na internet.
                        </p>
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas5" role="button" aria-expanded="false" aria-controls="collapseDuvidas5">
                Como eu recebo o valor da consulta ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas5" aria-expanded="false" aria-controls="collapseDuvidas5">
                </div>
            
                <div class="collapse" id="collapseDuvidas5">
                    <div class="px-3 text-left">
                        <p>
                        O valor das consultas fica disponível no painel financeiro, onde você cadastra seus dados bancários e solicita o resgate do valor. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas6" role="button" aria-expanded="false" aria-controls="collapseDuvidas6">
                Como é a consulta online ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas6" aria-expanded="false" aria-controls="collapseDuvidas6">
                </div>
            
                <div class="collapse" id="collapseDuvidas6">
                    <div class="px-3 text-left">
                        <p>
                        As consultas online ocorrem direto pela nossa plataforma, como uma videoconferência. Sempre 15 minutos antes do início da consulta, é enviado por email o link do consultório virtual. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas7" role="button" aria-expanded="false" aria-controls="collapseDuvidas7">
                Como o paciente me encontra ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas7" aria-expanded="false" aria-controls="collapseDuvidas7">
                </div>
            
                <div class="collapse" id="collapseDuvidas7">
                    <div class="px-3 text-left">
                        <p>
                        O paciente pode fazer a busca tanto para consulta presencial, quanto para consulta online. Para aparecer nas buscas é necessário que você tenha agendas e horários cadastrados. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas8" role="button" aria-expanded="false" aria-controls="collapseDuvidas8">
                As consultas online ficam gravadas ?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas8" aria-expanded="false" aria-controls="collapseDuvidas8">
                </div>
            
                <div class="collapse" id="collapseDuvidas8">
                    <div class="px-3 text-left">
                        <p>
                        Não, nenhuma consulta fica gravada em nosso sistema e apenas você e o paciente tem acesso ao consultório no momento da consulta. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

  <!-- FIM PERGUNTAS FREQUENTES -->

@endsection