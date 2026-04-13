@extends('layouts.app')

@section('content')
    <!-- Inicio layout post (destaque) -->
    <section class="section bg-light">
        <div class="container">

            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">

                    @foreach ($posts as $post)
                        <a href="{{ route('posts.singlepost', $post->id) }}" class="h-entry mb-30 v-height gradient">

                            <div class="featured-img"
                                style="background-image: url('{{ asset('assets/images/' . $post->image) }}');"></div>

                            <div class="text">
                                <span class="date">{{ $post->created_at }}</span>
                                <h2>{{ $post->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="col-md-4">
                    @foreach ($postOne as $justPost)
                        <a href="{{ route('posts.singlepost', $justPost->id) }} " class="h-entry img-5 h-100 gradient">

                            <div class="featured-img"
                                style="background-image: url('{{ asset('assets/images/' . $justPost->image . '') }}');">
                            </div>

                            <div class="text">
                                <span class="date">{{ $justPost->created_at }}</span>
                                <h2>{{ $justPost->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($postTwo as $post)
                        <a href="{{ route('posts.singlepost', $post->id) }}" class="h-entry mb-30 v-height gradient">

                            <div class="featured-img"
                                style="background-image: url('{{ asset('assets/images/' . $post->image . '') }}');"></div>

                            <div class="text">
                                <span class="date">{{ $post->created_at }}</span>
                                <h2>{{ $post->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- termina -->

    <!-- Inicia post por categoria - oms -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">OMS</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">

                <!-- COLUNA ESQUERDA -->
                <div class="col-md-9">
                    <div class="row g-3">

                        @foreach ($postOms as $post)
                            <div class="col-md-6">
                                <div class="blog-entry">

                                    <a href="{{ route('posts.singlepost', $post->id) }}" class="img-link">
                                        <img src="{{ asset('assets/images/' . $post->image) }}" class="img-fluid">
                                    </a>

                                    <span class="date">{{ $post->created_at }}</span>

                                    <h2>
                                        <a href="{{ route('posts.singlepost', $post->id) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>

                                    <p>{{ $post->description }}</p>

                                    <p>
                                        <a href="{{ route('posts.singlepost', $post->id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            Mais...
                                        </a>
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- COLUNA DIREITA (SIDEBAR) -->
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">

                        @foreach ($postOms2 as $post)
                            <li>
                                <span class="date">{{ $post->created_at }}</span>
                                <h3>
                                    <a href="{{ route('posts.singlepost', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p>{{ $post->description }}</p>
                                <p>
                                    <a href="{{ route('posts.singlepost', $post->id) }}" class="read-more">
                                        Continuar a ler
                                    </a>
                                </p>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
    </section>
    <!-- FIM SIDEBAR-->

    @endsection