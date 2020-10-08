@extends('layouts.master')

@section('content')
<section class="psicologo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-area-content">
                    <h2>Esqueça a burocracia e preocupe-se com o que realmente importa: os pacientes</h2>
                    <a href="/register"><button type="button"
                            class="btn btn-primary btn-lg btn-block py-2 my-5 w-75  badge-pill">Faça Parte</button></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!--Section seja Psicólogo inicio-->
<section>
    <div class="seja-psicologo mt-3">
        <div class="container text-center py-3">
            <div class="row subtitulo py-4 d-flex flex-column justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <i class="fa fa-laptop"></i>
                    <h4 class="py-3">Para você que prefere a conveniência da tecnologia.Venha fazer parte da
                        Psiconet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-calendar"></i>
                        <h3>Flexibilidade</h3>
                        <p>Liberdade para atender de onde estiver e administrar seus horários.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-thumbs-up"></i>
                        <h3>Custo-benefício</h3>
                        <p>Seu dados são aprovados pelo cpf. Você não precisa desenvolver nada.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-users"></i>
                        <h3>Visibilidade</h3>
                        <p>Aumente sua capacidade de atendimento através da sua presença online.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-lock"></i>
                        <h3>Privacidade</h3>
                        <p>Mantenha sigilo com as informações dos seus clientes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-credit-card"></i>
                        <h3>Praticidade</h3>
                        <p>Pagamento com cartão de crédito ou boleto.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                    <div class="seja-psicologo-box">
                        <i class="py-2 fa fa-user-secret"></i>
                        <h3>Segurança</h3>
                        <p>Consultas agendadas somente após a confirmação do pagamento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <section class="psicologo-preco ptb-90" id="pricing">
        <div class="row mr-0">
            <div class="col-lg-12 text-center">
                <div class="sec-title">
                    <h2 class="text-white">Nossos Planos e Preços<span
                            class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p class="text-white">Escolha o plano mais adequado para as suas necessidades.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4 mb-5">
                    <div class="preco-box h-100">
                        <div class="preco-top">
                            <h4>Plano Básico</h4>
                        </div>
                        <div class="preco">
                            <h1><span>R$</span>&nbsp;239.70</h1>
                        </div>
                        <div class="mt-3 d-flex flex-column">
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between d-flex justify-content-between">
                                    Meio de pagamento &nbsp; &nbsp;<i class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Recebimento garantido &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico de Consultas &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Emissão de recibos &nbsp; &nbsp;
                                    <i class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico financeiro &nbsp;
                                    &nbsp;<i class="fa fa-times"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Prontuário Eletrônico &nbsp;
                                    &nbsp;<i class="fa fa-times"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto pt-2 d-flex justify-content-between">Agenda integrada &nbsp; &nbsp; <i
                                        class="fa fa-times"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"><button type="button"
                                class="align-self-start btn btn-success btn-lg btn-block text-uppercase">Assinar</button></a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-5">
                    <div class="preco-box h-100">
                        <div class="preco-top">
                            <h4>Plano Essencial</h4>
                        </div>
                        <div class="preco">
                            <h1><span>R$</span>&nbsp;319.80</h1>
                        </div>
                        <div class="mt-3 d-flex flex-column">
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Meio de pagamento &nbsp; &nbsp;<i
                                        class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Recebimento garantido &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico de Consultas &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Emissão de recibos &nbsp; &nbsp;
                                    <i class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico financeiro &nbsp;
                                    &nbsp;<i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Prontuário Eletrônico &nbsp;
                                    &nbsp;<i class="fa fa-times"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto pt-2 d-flex justify-content-between">Agenda integrada &nbsp; &nbsp; <i
                                        class="fa fa-times"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"><button type="button"
                                class="align-self-start btn btn-success btn-lg btn-block text-uppercase">Assinar</button></a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-5">
                    <div class="preco-box h-100">
                        <div class="preco-top">
                            <h4>Profissional</h4>
                        </div>
                        <div class="preco">
                            <h1><span>R$</span>&nbsp;419.70</h1>
                        </div>
                        <div class="mt-3 d-flex flex-column">
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Meio de pagamento &nbsp; &nbsp;<i
                                        class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Recebimento garantido &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico de Consultas &nbsp;
                                    &nbsp; <i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Emissão de recibos &nbsp; &nbsp;
                                    <i class="fa fa-check"></i>
                                </p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Histórico financeiro &nbsp;
                                    &nbsp;<i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto py-2 d-flex justify-content-between">Prontuário Eletrônico &nbsp;
                                    &nbsp;<i class="fa fa-check"></i></p>
                            </div>
                            <div class="text-left">
                                <p class="m-auto pt-2 d-flex justify-content-between">Agenda integrada &nbsp; &nbsp; <i
                                        class="fa fa-check"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"><button type="button"
                                class="align-self-start btn btn-success btn-lg btn-block text-uppercase">Assinar</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- pricing section end -->
</section>

@endsection