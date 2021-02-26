@extends('layouts.app')

@section('title', '- Sobre Nós')

@section('content')

    <div id="quem-somos">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/banner-quem-somos.png') }}')">
            <div class="container">
                <h5>Sobre Nós</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-lg-6 px-md-5">

                        <div class="title-section text-left">
                            <h3>Fusce nec arcu ornare, commodo velit venenatis</h3>
                            <h2>Curabitur imperditente</h2>
                        </div>

                        <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus
                            at sapien at tellus congue accumsan ac et ipsum. Pellentesque.</p>
                        <p>Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies metus id,
                            volutpat ligula.</p>
                        <p>Phasellus velit ligula, sollicitudin nec tempor at, placerat convallis arcu. Sed elementum
                            consectetur sem id aliquet. Nullam congue lorem ut ante tempor, ac commodo lectus vestibulum.
                            Nullam iaculis, ante quis ultricies pretium, dui turpis tincidunt mi, vel ultricies mi dolor sit
                            amet purus. Donec consequat tortor dolor, ullamcorper dictum libero consequat at. Duis dignissim
                            scelerisque urna, vitae rhoncus urna vulputate a. Curabitur suscipit consequat arcu.</p>
                        <p>Etiam vulputate, orci eu dapibus ullamcorper, nisi magna accumsan metus, vitae molestie odio
                            mauris eget elit. Ut sed fermentum elit. Etiam sollicitudin dolor elit, sit amet egestas tortor
                            consectetur eu.</p>

                    </div>

                    <div class="col-lg-6">

                        <img class="img-fluid" src="{{ asset('assets/images/sobre-rco.jpg') }}" alt="RCO" title="RCO">

                    </div>

                    <div class="col-lg-12 mt-5">

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon-target.png') }}" alt="">
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>
                                </div>

                            </div>


                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon-eye.png') }}" alt="">
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>
                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon-group.png') }}" alt="">
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>




            </div>

        </div>

    </div>

@endsection
