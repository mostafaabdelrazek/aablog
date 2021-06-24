@extends('main')
@section('title' , '| Blogs')
@section('stylesheets')
{!! Html::style(url('css/blogs.css')    )!!}
@endsection

@section('header-content')

@endsection

@section('content')

<div class="header-title">

    <h2 >
        our blogs add to you more than advice
    </h2>
</div>

    <div class="col-12">
        
    <div class="row blog-container">
        <div class="col-lg-2 offset-lg-4  ">
            <div class="blog-desc d-none d-lg-block ">
                <div class="">
                    <div>
                        <h6 class="desc red">Category: Ahmed Yasser</h6>
                    </div>
                    <div>
                        <h6 class="desc ment">Author: Ahmed Yasser</h6>
                    </div>
                </div>
                <div>
                    <h6 class="desc yellow">Created At: 12 May 2020</h6>
                </div>

            </div>
        </div>
        <div class="col-lg-6  shadow p-3 mb-5 bg-white rounded ">
            <div>
                <h2 class="text-center blog-title "> Lorem ipsum dolor sit amet consectetur, a</h2>
                <div class="row blog-body">
                    <div class="col-lg-7 blog-image">
                        <img src="{{url('images')}}/right.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <p>
                            nsdfsdsectetur
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis ducimus hic harum perferendis incidunt earum animi asperiores. Quam incidunt inventore eius nihil quo doloribus, voluptate impedit veritatis?
                        </p>
                        <a href="#" class="float-right btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row blog-container">
        <div class="col-lg-6 shadow p-3 mb-5 bg-white rounded ">
            <div>
                <h2 class="text-center blog-title"> Lorem ipsum dolor sit amet consectetur, a</h2>
                <div class="row blog-body">
                    <div class="col-lg-7 blog-image">
                        <img src="{{url('images')}}/left.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 ">
                        <p>
                            nsdfsdsectetur
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis ducimus hic harum perferendis incidunt earum animi asperiores. Quam incidunt inventore eius nihil quo doloribus, voluptate impedit veritatis?
                        </p>
                        <a href="#" class="float-right btn btn-primary btn-sm">Read More</a>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="blog-desc reverse d-none d-lg-block">
              <div>
                <div>
                    <h6 class="desc after-reverse red"> <span> Category: </span>Ahmed Yasser</h6>
                </div>
                <div>
                    <h6 class="desc after-reverse ment"> <span> Author: </span>Ahmed Yasser</h6>
                </div>
              </div>
                <div>
                    <h6 class="desc after-reverse yellow">  <span>Created At:</span> 12 May 2020</h6>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="row blog-container">
        <div class="col-lg-2 offset-lg-4 ">
            <div class="blog-desc d-none d-lg-block">
                <div>
                    <div>
                        <h6 class="desc red">Category: Ahmed Yasser</h6>
                    </div>
                    <div>
                        <h6 class="desc ment">Author: Ahmed Yasser</h6>
                    </div>
                </div>
                <div>
                    <h6 class="desc yellow">Created At: 12 May 2020</h6>
                </div>

            </div>
        </div>
        <div class="col-lg-6  shadow p-3 mb-5 bg-white rounded ">
            <div>
                <h2 class="text-center blog-title "> Lorem ipsum dolor sit amet consectetur, a</h2>
                <div class="row blog-body">
                    <div class="col-lg-7 blog-image">
                        <img src="{{url('images')}}/ff.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <p>
                            nsdfsdsectetur
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo tenetur dolor perspiciatis ducimus hic harum perferendis incidunt earum animi asperiores. Quam incidunt inventore eius nihil quo doloribus, voluptate impedit veritatis?
                        </p>
                        <a href="#" class="float-right btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
{{Html::script('js/home.js')}}
@endsection