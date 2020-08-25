<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Log in</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Log in
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ route('login') }}">

      {{ csrf_field() }}

      <div class="ui stacked segment">

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>

        <button type="submit" class="ui fluid large teal submit button">Enter</button>

      </div>

        @if ($errors->any())
          <div class="ui error message" style="display:block;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="text-align: left;">{{ $error }}</li>
                    @endforeach
                </ul>
          </div>
        @endif

        @if (session('success'))
            <div class="ui success message" style="display:block;">
                {{ session('success') }}
            </div>
        @endif

    </form>

    <div class="ui message">
      You are new? <a href="{{route('registro')}}">Sign up</a>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>

</body>

</html>
