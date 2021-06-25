@extends('main')
@section('title' , "|")

@section('stylesheets')
{!! Html::style(url('css/single.css'))!!}
@endsection

@section('content')
<div class="col-12">
    <div class="row bg-image">
        <div class="col-lg-5 offset-lg-2 ">
           <h1>
               <span>
                   Blog title here
               </span>
           </h1>
            <h5 class="badge badge-secondary"><span>Category:</span>Girls</h5>
            <h5 class="badge badge-secondary"><span>Author:</span> Ahmed Yasser</h5>
            <h5 class="badge badge-secondary"><span>Created At:</span> 12 May 2021</h5>
        </div>
    </div>
  <div class="row">
    <div class="col-md-8 offset-md-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis inventore beatae perferendis minus? Error voluptatibus placeat necessitatibus ad quo eveniet omnis ducimus cumque perspiciatis unde quam quia, eos, aut delectus.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. In expedita minima harum reprehenderit ab omnis iste dolores molestiae dignissimos, pariatur officiis assumenda, neque sapiente totam facere maxime ullam vero temporibus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, praesentium. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, porro impedit dolores quis culpa nemo harum numquam eaque ut quo quisquam vel odio sint quam nam? Dolore praesentium repellat similique.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt explicabo quaerat deserunt praesentium laboriosam nostrum sit ea ab error repellendus impedit aliquid eveniet autem ad officiis, maiores accusamus nulla ipsum!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eos similique cum voluptatum rem? Minima id reprehenderit distinctio libero esse numquam laboriosam voluptatum totam perspiciatis tenetur. Molestias quas architecto aspernatur?
        Saepe veniam dignissimos quisquam blanditiis eius harum, ea nesciunt molestiae soluta, doloremque animi delectus aperiam sunt illo dolor nostrum deserunt.

    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        jQuery(document).ready(function($) {
         $('.bg-image').css({"background-image": "url('http://127.0.0.1:8000/images/right.jpg')" , "margin-top" : " -"+$('.nav-wrapper').height()+"px" }).resize().height($(window).height() );
         $('.nav-wrapper').css({"position" : "relative" , "z-index" : "1"});
     });
    });
</script>
@endsection
