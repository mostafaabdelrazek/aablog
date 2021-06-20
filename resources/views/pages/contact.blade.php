@extends('main')
@section('title' , '| contact')
@section('stylesheets')

{{Html::style('css/contact.css')}}

@endsection
@section('content')


<div class="container contact-container">
    <div class="row contact-row">
       <div class="col-md-12 text-center contact-header">
         <span>
           conta</span>ct
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center  left-contact">
                <div class="d-flex flex-column icon-section">
                    
                    <div class="p-2 bd-highlight">
                        <i class="far fa-envelope"></i>
                        <span>AhmedAbdelrezek@aa.sport.alg</span>
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas fa-phone-alt" style="color: green;"></i>
                        <span>+213-0124-456-31202</span>
                    </div>

                    <div class="mt-auto p-2 bd-highlight icons">
                        <a href="">
                            <i class="fab fa-facebook-square" style="color:  #1F4788;"></i>
                       <span>facebook</span>
                        </a>
                    </div>
                    <div class="p-2 bd-highlight icons">
                       <a href="">
                        <i class="fab fa-instagram"></i>
                        <span>instagram</span>
                       </a>
                    </div>
                    <div class="p-2 bd-highlight icons">
                       <a href="">
                        <i class="fab fa-twitter" style="color:  #19B5FE;"></i>
                        <span>twitter</span>
                       </a>
                    </div>
                    
                </div>
        </div>
        <div class="col-md-6 contact-right">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="text-center"> <i class="fas fa-id-card-alt fa-2x"></i></h4>
                    <form action='/contact' method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <input type="text" name='name' placeholder="Enter Your Name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <input type="text" name='email' placeholder="Email" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id=""  rows="8" placeholder="write contact message here .." class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="phone" placeholder="Phone Number" class="form-control">
                            <small class="form-text text-muted">optional</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-block border">Send a Message <i class="far fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>


@endsection