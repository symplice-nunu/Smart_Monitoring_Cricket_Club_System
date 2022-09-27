@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">

  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <style media="screen">
    body{
  margin:0;
  padding:0;
  font-family:sans-serif;
  background: #dde1e7;
  user-select:none;
  min-height: 100vh;
}
 
 

 
.content{
  margin-top: 10%;
  margin-left: 30%;
  width: 330px;
  height: auto;
  align-items: center;
  justify-content: center;
  background: #dde1e7;
  padding: 45px 35px 40px;
  box-sizing: border-box;
  border-radius: 5px;
  box-shadow: -4px -4px 7px #fffdfdb7,
              3px 3px 5px rgba(94, 104, 121, 0.288);
}
  





.text{
  font-size: 30px;
  color: #000000;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
}
form{
  margin-top: 40px;
}
form .field{
  margin-top: 20px;
  display: flex;
}
 
.field .fas{
  height: 50px;
  width: 60px;
  color: #868686;
  font-size: 20px;
  line-height: 50px;
  border: none;
  text-align: center;
  border-right: none;
  background: #dde1e7;
  box-shadow: inset 2px 2px 5px #babecc,
              inset -5px -5px 10px #ffffff73;
}

.field input,form button{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 19px;
  color: #868686;
  padding: 0 15px;
  border-radius: 0 5px 5px 0;
  border: none;
  background: #dde1e7; 
  box-shadow: inset 2px 2px 5px #babecc,
              inset -5px -5px 10px #ffffff73;
}
form button{
  color:  #363837;
  margin-top: 40px;
  border-radius: 5px!important;
  font-weight: 600;
  letter-spacing: 1px;
  cursor: pointer;
   box-shadow: -3px -3px 7px #fffdfdb7,
 
              2px 2px 5px rgba(94, 104, 121, 0.288);
}
 
button:hover{
  color: #0dafbb;
  box-shadow: inset 2px 2px 5px #babecc,
              inset -5px -5px 10px #ffffff73;
}
.link{
  margin-top: 35px;
  color: #000000;
  text-align: center;
}
.link a{
  color: #08adef;
  text-decoration: none;
}
.link a:hover{
  text-decoration: underline;
}
.content img{
  width: 90px;
  height: 90px;
  margin-top: -100px;
  border-radius: 50px;
  margin-bottom: 20px;
  margin-left: 31%;
  box-shadow: 

  0px 0px 2px #6b6a6a,
  0px 0px 0px 5px #ecf0f3,
  5px 5px 15px #a7aaaf,
  -8px -8px 15px #ffffff
  ;
}
  </style>
</head>

<body>
 <div class="content">
    <img src="{{ asset('images/cricket.jpg')}}">
      <div class="text">
        REGISTER
     </div>
      
        <form method="POST" action="{{ route('register') }}">
                        @csrf
          <div class="field">
             <div class="fas fa-user"></div>
             <!-- <input type="text" placeholder="Email or Phone"> -->
             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>
          @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<div class="field">
             <div class="fas fa-envelope"></div>
             <!-- <input type="text" placeholder="Email or Phone"> -->
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>
          @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
          <div class="field">
             <div class="fas fa-lock"></div>
             <!-- <input type="password" placeholder="Password"> -->
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                
          </div>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="field">
             <div class="fas fa-lock"></div>
             <!-- <input type="password" placeholder="Password"> -->
             <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

             <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->
          </div>
          <button type="submit">SIGN UP</button>
          <div class="link">
             Arleady Have Account
             <a href="{{ url('login')}}">Login</a>
          </div>

       </form>



      </div>
 
</body>
@endsection
