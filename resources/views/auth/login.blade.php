@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
      <h5 style="font-size: 10px;">SMART CRICKET CLUB MONITORING SYSTEM</h5 style="font-size: 10px;">
        LOGIN
     </div>
      
        <form method="POST" action="{{ route('login') }}">
                        @csrf
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

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <button type="submit">LOGIN</button>
          <div class="link">
             Not a member?
             <a href="{{ url('register')}}">Signup now</a>
          </div>

          
          <div class="link">
             
             <a href="{{ route('password.request') }}">Forgot Password</a>
          </div> <br>
          <div style="font-size: 10px;"> <strong>Copyright &copy; 2022-2023 <a href="#">Sccms</a>.</strong>
     All rights reserved.</div>
       </form>



      </div>
      
 
</body>
@endsection
