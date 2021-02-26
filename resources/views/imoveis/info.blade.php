@extends('layouts.app')

@section('title', '- '.$imovel->nome)

@section('content')

    <div id="imovel">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/banner-imoveis.png') }}')">
            <div class="container">
                <h5>Imóveis</h5>
                <h1>{{ $imovel->nome }}</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-12 header">

                        <div class="row">

                            <div class="col-md-6 info-imovel">

                                <h3 class="titulo">{{ $imovel->nome }}</h3>
                                <span class="localidade"><i class="fas fa-map-marker-alt"></i> {{ $imovel->bairro }} - {{ $imovel->cidade }}
                                </span>

                            </div>

                            <div class="col-md-6 text-right"> </div>

                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12 main-content">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-images-tab" data-bs-toggle="pill" data-bs-target="#pills-images" type="button" role="tab" aria-controls="pills-images" aria-selected="true">Imagens</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-map-tab" data-bs-toggle="pill" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="false">Mapa</button>
                            </li>

                            @isset($imovel->video)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</button>
                            </li>
                            @endisset
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">

                                <div class="owl-theme owl-carousel imovelCarousel">

                                    @foreach ($images as $image)
                                    <div class="item">
                                        <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid" alt="...">
                                    </div>
                                    @endforeach
                                    
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">

                                <!-- Google Maps -->
                                <div class="map">
                                    <div id="map-canvas"></div>
                                </div>
                                <!--/Google Maps -->


                                <script>
                                    var lat = parseFloat("{{ $imovel->latitude }}");
                                    var lng = parseFloat("{{ $imovel->longitude }}");

                                    // In this example, we center the map, and add a marker, using a LatLng object
                                    // literal instead of a google.maps.LatLng object. LatLng object literals are
                                    // a convenient way to add a LatLng coordinate and, in most cases, can be used
                                    // in place of a google.maps.LatLng object.

                                    var map;

                                    function initialize() {
                                        var mapOptions = {
                                            zoom: 17,
                                            center: {
                                                lat: lat,
                                                lng: lng
                                            }
                                        };

                                        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                                        var marker = new google.maps.Marker({
                                            // The below line is equivalent to writing:
                                            // position: new google.maps.LatLng(-34.397, 150.644)
                                            position: {
                                                lat: lat,
                                                lng: lng
                                            },
                                            map: map
                                        });

                                        // You can use a LatLng literal in place of a google.maps.LatLng object when
                                        // creating the Marker object. Once the Marker object is instantiated, its
                                        // position will be available as a google.maps.LatLng object. In this case,
                                        // we retrieve the marker's position using the
                                        // google.maps.LatLng.getPosition() method.
                                        var infowindow = new google.maps.InfoWindow({
                                            content: '<p>Marker Location:' + marker.getPosition() + '</p>'
                                        });

                                        google.maps.event.addListener(marker, 'click', function() {
                                            infowindow.open(map, marker);
                                        });
                                    }

                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>

                            </div>

                            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                
                            </div>

                        </div>

                        <div class="informacoes-imovel">

                            <div class="detalhes my-4">

                                <h4>Informações sobre o imóvel</h4>

                                <ul>
                                    <li><b>Título:</b> {{ $imovel->nome }}</li>
                                    <li><b>Incorporador:</b> {{ $imovel->incorporador }}</li>
                                    <li><b>Projeto Arquitetônico:</b> {{ $imovel->projeto_arquitetonico }}</li>
                                    <li><b>Entrega da Obra:</b> {{ $imovel->obra_entrega }}</li>
                                    <li><b>Nº de torres:</b> {{ $imovel->torres }}</li>
                                    <li><b>Nº de pavimento térreo:</b> {{ $imovel->pavimento_terreo }}</li>
                                    <li><b>Nº de pavimento tipo:</b> {{ $imovel->pavimento_tipo }}</li>
                                    <li><b>Nº de pavimento cobertura:</b> {{ $imovel->pavimento_cobertura }}</li>
                                    <li><b>Nº de unidades por pavimento:</b> {{ $imovel->unidade_pavimento }}</li>
                                    <li><b>Total de unidades:</b> {{ $imovel->total_unidade }}</li>
                                    <li><b>Dormitórios:</b> {{ $imovel->dormitorios }}</li>
                                    <li><b>Nº de elevadores:</b> {{ $imovel->elevadores }}</li>
                                    <li><b>Área privativa tipo:</b> {{ $imovel->area_privativa }}</li>
                                    <li><b>Área do terreno:</b> {{ $imovel->area_terreno }}</li>
                                    <li><b>Subsolo:</b> {{ $imovel->subsolo }}</li>
                                </ul>

                            </div>

                            <div class="descricao my-4">

                                <h4>Descrição</h4>

                                <div>{!! $imovel->descricao !!}</div>
                            </div>

                            <div class="diferenciais my-4">

                                <h4>Diferenciais</h4>

                                <ul>
                                    @foreach ($diferenciais as $diferencial)
                                        @if ($imovel->diferenciais->contains($diferencial))
                                        <li><i class="fas fa-check-square"></i> {{ $diferencial->nome }} </li>
                                        @endif 
                                    @endforeach
                                </ul>

                            </div>

                            @if($status)
                            <div class="status my-4">
                                <h4>Status da Obra</h4>

                                @foreach ($status as $stats)
                                @foreach ($statusProgresso as $progresso)
                                    @if ($stats->id == $progresso->status_id)
                                    <div class="status-item my-2">
                                        <small>{{ $stats->nome }}</small>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $progresso->porcentagem }}%;" aria-valuenow="{{ $progresso->porcentagem }}" aria-valuemin="0" aria-valuemax="100">{{ $progresso->porcentagem }}%</div>
            
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                @endforeach

                            </div>
                            @endif

                            @if($plantas)
                            <div class="planta my-4">

                                <h4>Plantas</h4>

                                <div class="owl-theme owl-carousel imovelCarousel">

                                    @foreach ($plantas as $planta)
                                    <div class="item">
                                        <img src="{{ asset('storage/' . $planta->image) }}" class="img-fluid" alt="...">
                                    </div>
                                    @endforeach
                                    
                                </div>
                                
                            </div>
                            @endif
                            
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12 side-content">

                        <div class="fixed-content">
                            <div class="form-imovel">

                                <h4>Inicie um atendimento agora mesmo</h4>
            
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
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Olá, Estou interessado" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
    
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary text-right">Enviar Mensagem</button>
                                    </div>
    
                                </form>
    
                            </div>
    
                            <div class="box-info-contato mt-5">
    
                                <h4>Ou entre em contato conosco:</h4>
    
                                <ul>
                                    <li>
                                        <span class="icon"><i class="fas fa-phone-alt"></i></span>
                                        <span>(11) 9999-9999</span>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="fab fa-whatsapp"></i></span>
                                        <span>(11) 99999-0000</span>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-envelope"></i></span>
                                        <span>contato@rcompreendimentos.com.br</span>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                        <span>Av. Washington Luiz, 685<br>Jardim Emilia, Sorocaba - SP</span>
                                    </li>
                                </ul>
    
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
