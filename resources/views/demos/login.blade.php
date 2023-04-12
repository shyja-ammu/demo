@extends('demos.header.ab') 

@section('content')

@include('demos.header.ab1')

          <form action="{{ url('login') }}" method="POST" role="form" class="php-email-form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            
              <div class="row">
               <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" name="password" class="form-control" id="name" placeholder="Password" required>
                </div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Sign In</button></div>
            </form>

@endsection