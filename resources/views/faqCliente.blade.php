@extends('layouts.master')

@section('title', 'Faq Cliente')
    
@section('content')
<div class="container pt-5 mt-5">
        <div class="row d-flex justify-content-center py-3">
                <h1>Como Funciona</h1>
        </div>        
        <div class="container custom-duvidas" id="duvidas">
            <div class="text-center">
                <h2 class="mb-2">Perguntas Frequentes</h2>
                <h4 class="mb-2">Veja porque o Psiconet é a melhor opção para você</h4>
            </div>
            <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas" role="button" aria-expanded="false" aria-controls="collapseDuvidas">
                O que é a Psiconet?
                </a>
                
            
                <div class="collapse" id="collapseDuvidas">
                    <div class="px-3 text-left">
                        <p>
                        A Psiconet foi criada para conectar você a psicólogos licenciados e experientes através de sessões de vídeo de forma simples, confidencial e muito mais acessível.
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="row px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas1" role="button" aria-expanded="false" aria-controls="collapseDuvidas1">
                Como a Psiconet pode melhorar minha vida?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas1" aria-expanded="false" aria-controls="collapseDuvidas1">
                </div>
            
                <div class="collapse" id="collapseDuvidas1">
                    <div class="px-3 text-left">
                        <p>
                        Temos mais de 1.500 psicólogos licenciados para ajudar você. A grande maioria desses profissionais é experiente em diversas áreas. Já ajudamos pessoas pelos seguintes motivos: 
                        </p>
                        <p>Descontrole emocional</p>
                        <p>Distúrbio alimentar - Extrema magreza</p>
                        <p>Doença psicológica</p>
                        <p>Fibromialgia</p>
                        <p>Pensamento obsessivo</p>
                        <p>Estresse pós-traumático </p>
                        <p>Problemas de relacionamento </p>
                        <p>Problemas no trabalho</p>
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas2" role="button" aria-expanded="false" aria-controls="collapseDuvidas2">
                A terapia online realmente funciona?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas2" aria-expanded="false" aria-controls="collapseDuvidas2">
                </div>
            
                <div class="collapse" id="collapseDuvidas2">
                    <div class="px-3 text-left">
                        <p>
                        Segundo diversos estudos realizados na última década, a terapia online tem eficácia comprovada, assim como a presencial. Além disso, para assegurar a efetividade do tratamento, a Psiconet seleciona cuidadosamente seus terapeutas, sendo todos licenciados e credenciados pelo Conselho de Psicologia. 
                        </p>
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas3" role="button" aria-expanded="false" aria-controls="collapseDuvidas3">
                Terapia online é confiável?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas3" aria-expanded="false" aria-controls="collapseDuvidas3">
                </div>
            
                <div class="collapse" id="collapseDuvidas3">
                    <div class="px-3 text-left">
                        <p>
                        Sim, segundo diversos estudos realizados na última década, a terapia online tem eficácia comprovada, assim como a presencial.
                        </p>
                    </div>
                </div>
            </div>
        
                   <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas4" role="button" aria-expanded="false" aria-controls="collapseDuvidas4">
                Como Funciona?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas4" aria-expanded="false" aria-controls="collapseDuvidas4">
                </div>
            
                <div class="collapse" id="collapseDuvidas4">
                    <div class="px-3 text-left">
                        <p>
                        Em seu primeiro contato, você selecionará o psicólogo com quem mais se identificar. Depois, o profissional selecionado responderá algumas perguntas sobre os motivos que fizeram você a buscar ajuda. Por fim, você será direcionado para selecionar o plano de assinatura que preferir.
                        </p>
                    </div>
                </div>
            </div>
        
               <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas5" role="button" aria-expanded="false" aria-controls="collapseDuvidas5">
                Os psicólogos que atendem na Psiconet são licenciados?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas5" aria-expanded="false" aria-controls="collapseDuvidas5">
                </div>
            
                <div class="collapse" id="collapseDuvidas5">
                    <div class="px-3 text-left">
                        <p>
                        Com certeza! Na Psiconet selecionamos criteriosamente os psicólogos que se cadastram para atender conosco. Durante o processo de seleção levamos em consideração o tempo de experiência, os cursos, a faculdade e pós graduação, experiência clínica entre outros detalhes técnicos.
                        Todos os psicólogos que atuam a Psiconet já ajudaram milhares de pessoas em nossa plataforma e poderão ajudar você também. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas6" role="button" aria-expanded="false" aria-controls="collapseDuvidas6">
                Eu sempre ficarei em contato com o mesmo psicólogo?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas6" aria-expanded="false" aria-controls="collapseDuvidas6">
                </div>
            
                <div class="collapse" id="collapseDuvidas6">
                    <div class="px-3 text-left">
                        <p>
                        Sim, você sempre permanecerá com o mesmo psicólogo selecionado. Caso não se adapte ao psicólogo, você também pode solicitar a troca diretamente pelo “Suporte” no nosso site. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas7" role="button" aria-expanded="false" aria-controls="collapseDuvidas7">
                Posso trocar de psicólogo?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas7" aria-expanded="false" aria-controls="collapseDuvidas7">
                </div>
            
                <div class="collapse" id="collapseDuvidas7">
                    <div class="px-3 text-left">
                        <p>
                        Sim. Caso não tenha se adaptado com o seu psicólogo, você pode solicitar outro profissional no “Suporte” dentro do nosso site. 
                        </p>
                    </div>
                </div>
            </div>
        
              <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas8" role="button" aria-expanded="false" aria-controls="collapseDuvidas8">
                Tenho privacidade nas minhas conversas?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas8" aria-expanded="false" aria-controls="collapseDuvidas8">
                </div>
            
                <div class="collapse" id="collapseDuvidas8">
                    <div class="px-3 text-left">
                        <p>
                        Sim sua segurança e privacidade é incontestável. Por isso, nossa plataforma é 100% criptografada, a fim de garantir que apenas você e seu terapeuta tenham acesso ao conteúdo das sessões.
                        Além disso, a terapia online segue o Código de Ética da Psicologia, que exige confidencialidade e sigilo nas informações reveladas pelo paciente. 
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="row py-3 px-3">
                <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas9" role="button" aria-expanded="false" aria-controls="collapseDuvidas9">
                Tenho menos de 18 anos, posso usar a Psiconet?
                </a>
                <div data-toggle="collapse" data-target="#collapseDuvidas9" aria-expanded="false" aria-controls="collapseDuvidas9">
                </div>
            
                <div class="collapse" id="collapseDuvidas9">
                    <div class="px-3 mt-4 text-left">
                        <p>
                        Infelizmente não. Apenas maiores de 18 anos podem utilizar os serviços da Psiconet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>

    
@endsection