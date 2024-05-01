@extends('client.layouts.master')


@section('content')

<div class="home-slider owl-theme owl-carousel">
    <div class="slider-item slider-item-img">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <div class="slider-shape">
                        
                        </div>
                        <h1>Vizyon</h1>
                        <p>Bilimsel anlamda uluslararası literatüre önemli katkılar sağlamak ve ülkemizin adının modern tıp camiasında 	ilerlemesine katkı sağlamak en önemli vizyondur.
</p>
                        <div class="common-btn">
                            <a href="{{url('page/about')}}">Hakkımda</a>
                            <a class="cmn-btn-right" href="{{url('/blogs')}}">Bloglar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item slider-item-img">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <div class="slider-shape-two">
                           
                        </div>
                        <h1>Misyon</h1>
                        <p>Sürekli eğitim ve güncel bilgilerle desteklenen en modern tedavi yöntemlerini, modern bilim ve teknolojinin imkanları ile birleştirerek hastalarımıza ulaştırmak en önemli misyondur.</p>
                        <div class="common-btn">
                            <a href="{{url('page/about')}}">Hakkımda</a>
                            <a class="cmn-btn-right" href="{{url('/blogs')}}">Bloglar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item slider-item-img">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-text">
                        <div class="slider-shape-three">
                        
                        </div>
                        <h1>Bloglar ve Hakkımda</h1>
                        <p>Bloglarımı okumak ve hakkımda daha fazla bilgi edinmek için siteyi inceleyebilirsiniz</p>
                        <div class="common-btn">
                            <a href="{{url('page/about')}}">Hakkımda</a>
                            <a class="cmn-btn-right" href="{{url('/blogs')}}">Bloglar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-item">
                    <div class="about-left">
                        <img src="{{ URL::to('/') }}/clientassets/assets/img/home-one/erolfoto1.png" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-item about-right">
                    <img src="{{ URL::to('/') }}/clientassets/assets/img/home-one/5.png" alt="About">
                    <h2>{{$settings['hakkimda_baslik']}}</h2>
                    <p>{{$settings['hakkimda']}} </p>
                    
                    <a href="{{url('page/about')}}">Daha Fazla</a>
                </div>
            </div>
        </div>
    </div>
</div>








<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Son Paylaşılanlar</h2>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-item">
                    <div class="blog-top">
                        <a href="{{route('blogs.show',$blog->id)}}">
                            <img src="{{url('uploads/'.$blog->image)}}" alt="Blog">
                        </a>
                    </div>
                    <div class="blog-bottom">
                        <h3>
                            <a href="{{route('blogs.show',$blog->id)}}">{{$blog->title}}</a>
                        </h3>
                        <p>{{$blog->short_content}}</p>
                        <ul>
                            <li>
                                <a href="{{route('blogs.show',$blog->id)}}">
                                    Daha Fazla
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </li>
                          <li>
    <i class="icofont-calendar"></i>
    {{ \Carbon\Carbon::parse($blog['created_at'])->toDateString() }}
</li>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
