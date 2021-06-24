@extends('main')
@section('title' , '| Home')
@section('stylesheets')
    {!!Html::style(url('css/barimage.css')) !!}
@endsection

@section('content')

<!-- card start !!!-->
<div class="card-section container d-flex justify-content-around ">
    <div class="card" style="width: 20rem; background-color: #627782;">
        <div class="card-body  ">
            <h1 class="card-title ">about coutch</h1>
            <p class="card-text"> Lorem, ipsum dolor necessitatibus eligendi reiciendis repellat, ab quia ut? Cum magnam, et tempora libero optio aliquid voluptas harum quam dolor deserunt suscipit.</p>
            <a href="#" class="card-link ">more</a>
        </div>
    </div>
    <div class="card" style="width: 20rem; background-color: #e0a722;">
        <div class="card-body">
            <h1 class="card-title">trainers</h1>
            <p class="card-text">Lorem, ipsum dolor necessitatibus eligendi reiciendis repellat, ab quia ut? Cum magnam, et tempora libero optio aliquid voluptas harum quam dolor deserunt suscipit.</p>
            <a href="#" class="card-link ">more</a>
        </div>
    </div>
    <div class="card" style="width: 20rem; background-color: #8c6e3b;">
        <div class="card-body">
            <h1 class="card-title">membership</h1>
            <p class="card-text">Lorem, ipsum dolor necessitatibus eligendi reiciendis repellat, ab quia ut? Cum magnam, et tempora libero optio aliquid voluptas harum quam dolor deserunt suscipit.</p>
            <a href="#" class="card-link ">more</a>
        </div>
    </div>
</div>
<!--card end !!!-->
    <!-- About section start !!-->
    <div class="about  " style="margin: auto;">
        <div class="container">
        <h1 >About us</h1>
        <p>Spicialize private coutch & feed Expertation</p>
        <div class="line"></div>
        <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id alias reiciendis eaque unde enim est ratione, odio hic minus, doloribus officia illo modi mollitia voluptates ad voluptas, officiis aut!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, consequuntur doloremque consequatur porro expedita vel quos, aperiam placeat architecto eveniet sint aliquam autem? Incidunt distinctio perferendis repellendus illum deserunt maxime.

        </p>
    </div>
        <div class="about-photos  ">
            <div class=" container  d-flex justify-content-around ">
                <div class="p1 p">
                </div>
                <div class="p2 p">
                </div>
                <div class="p3 p">
                </div>
            </div>
        </div>

    </div>
    <!--about section end-->


    <!-- advantage section start-->
    <div class="adv">
        <div class='adv-read container'>
            <h1>01</h1>
            <h4>
                Who ready for a training round?
            </h4>
            <p class="adv-read-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur facilis saepe excepturi numquam, veniam harum temporibus? Tempore sequi, a aut odit quasi fugit at nihil harum. Veritatis dicta optio accusantium?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, a cum. Maxime ipsum nobis fugiat odio cumque commodi quo et labore qui explicabo adipisci, nam necessitatibus iusto iure laborum quisquam.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus earum neque recusandae voluptatem ea, at repellendus, animi inventore. A eligendi aspernatur impedit quod minima.
            </p>
        </div>
        <div class='adv-image d-flex flex-column justify-content-end align-items-end'>
            <span class="">train...drink...and</span>
            <h1>Be Happy ..! <br>with good health.</h1>
            <span>with us.</span>
        </div>

        <div class='adv-read container'>
            <h1>02</h1>
            <h4>
                How can iget motivated to get more healthy and stronger?
            </h4>
            <p class="adv-read-body">
                <p class="p"> <span class="right-sign">&check;</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus </p>
                <p class="p"> <span class="right-sign">&check;</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus </p>
                <p class="p"> <span class="right-sign">&check;</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus </p>
                <p class="p"> <span class="right-sign">&check;</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus </p>
                <p class="p"> <span class="right-sign">&check;</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel fugit ad, in veritatis necessitatibus </p>
            </p>
        </div>
    </div>
    <!--advantage section end-->


    <!--mission section start-->
     <div class="programs ">
         <div class="container">
        <div class=" p-card-section d-flex align-content-end flex-wrap ">
            
             <div class="col-lg-3 col-sm-6 ">
                <div class="card">
                    <div class="card-body">
                        <div>icon<i></i></div>
                        <h4 class="card-title">about gym</h4>
                        <p class="card-text">  consectetur adipisicing elit. Illo aliquid ipsum sit totam aliquam odit voluptas necessitatibus omnis </p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-lg-3 col-sm-6 ">    
                <div class="card">
                    <div class="card-body">
                        <div>icon<i></i></div>
                        <h4 class="card-title">lose fats</h4>
                        <p class="card-text">  consectetur adipisicing elit. Illo aliquid ipsum sit totam aliquam odit voluptas necessitatibus omnis </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 ">
                
                    <div class="card">
                        <div class="card-body">
                            <div>icon<i></i></div>
                            <h4 class="card-title">training</h4>
                            <p class="card-text">  consectetur adipisicing elit. Illo aliquid ipsum sit totam aliquam odit voluptas necessitatibus omnis </p>
                        </div>
                    </div>
                    
                    </div>

                    <div class="col-lg-3 col-sm-6 ">
                
                        <div class="card">
                            <div class="card-body">
                                <div>icon<i></i></div>
                                <h4 class="card-title">our team</h4>
                                <p class="card-text">  consectetur adipisicing elit. Illo aliquid ipsum sit totam aliquam odit voluptas necessitatibus omnis </p>
                            </div>
                        </div>
                        
                        </div>
            
        </div>
        </div>
     </div>
@endsection

@section('scripts')
{{Html::script('js/home.js')}}
@endsection