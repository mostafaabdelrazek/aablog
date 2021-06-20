@extends('main')
@section('title' , '| About')
@section('stylesheets')

{{Html::style('css/about.css')}}

@endsection
@section('content')




<div class="container about-container ">
    <div class="row">
        <div class="col-md-6 about-left ">
            <div class="col-md-10 offset-md-1  about-img"></div>
        </div>
        <div class="col-md-6  about-right">
            <div class="about-section">
            <small class="text-muted h5">inspired private trainer </small>
            <h1>About Us</h1>
            <p> 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut commodi alias sint tenetur dolorem hic nesciunt numquam. Quis obcaecati perspiciatis facilis aliquam incidunt nostrum amet. Deserunt voluptatibus est mollitia delectus.
            </p>

            <a href="#d-about" class="btn  about-btn">learn more</a>
            </div>
        </div>
    </div>
    <div class="row  detailed-section " id="d-about">
        <div class="col-md-6 offset-md-1">
            <h2>review about us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum repellat, totam harum quidem consectetur nam a quos eaque optio at sed mollitia, dolor aspernatur velit consequatur inventore vitae. Culpa, est.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur provident debitis itaque libero numquam amet dolorem, atque explicabo tempora exercitationem, saepe necessitatibus mollitia asperiores quam adipisci dicta recusandae eligendi.    
                <br><img src="images/ahmed1.jpg" alt="" class="img-fluid" style="max-width: 200px;">
                <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident minus quidem ratione tempora. Nobis molestiae optio sapiente sequi adipisci voluptates cupiditate maxime, modi mollitia molestias expedita id recusandae quam error!
         </p>
        </div>
        <div class="col-md-4">
            <h2>cirtifications</h2>
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            <div>
                <h5>organization</h5>
                <small class="text-muted"> 4 May 2015</small>
                <p>some talk about it here </p>
            </div>
           
            
            
            
        </div>
    </div>
</div>

@endsection