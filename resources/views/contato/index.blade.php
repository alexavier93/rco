@extends('layouts.app')

@section('title', '- Contato')

@section('content')

    <div id="contato">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/banner-contato.png') }}')">
            <div class="container">
                <h5>Contato</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                

                <div class="row">

                    <div class="col-xl-6 col-md-12 col-sm-12 mb-4 form">

                        <h3>Inicie um atendimento agora mesmo</h3>
    
                        @include('flash::message')
    
                        <form action="{{ route('contato.enviaEmail') }}" method="POST" class="my-4">

                            @csrf

                            <div class="form-group my-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group my-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group my-3">
                                <input type="text" name="phone" class="form-control telefone @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telefone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <input type="text" name="cidade" class="form-control @error('cidade') is-invalid @enderror" value="{{ old('cidade') }}" placeholder="Cidade">
                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        
                            <div class="form-group my-3">
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Mensagem" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-left">
                                <button type="submit" class="btn btn-primary text-right">Enviar Mensagem <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>

                        </form>
    
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 map">

                        <h3>Localização</h3>
                        <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14634.019020148411!2d-47.4623109!3d-23.5143413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90cbbaf1cc2ba957!2sRCO%20Empreendimentos%20Imobili%C3%A1rios!5e0!3m2!1spt-BR!2sbr!4v1614223381430!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                        <div class="infos">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="info">11 9999-8888 / 88888-9999</div>
                        </div>

                        <div class="infos">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <div class="info">contato@seudominio.com.br</div>
                        </div>

                        <div class="infos">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info">Av. Washington Luiz, 685 - Jardim Emilia, Sorocaba - SP</div>
                        </div>
                    
                    </div>
    
                </div>

            </div>

        </div>

    </div>

@endsection
