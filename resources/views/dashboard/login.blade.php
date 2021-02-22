<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>
  <!-- General CSS Files --> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('assets_dashboard/css/style.css')}}">
  <link rel="stylesheet" href="{{url('assets_dashboard/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{url('assets_dashboard/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <form method="POST" action="{{url('actionLogin')}}" class="needs-validation" novalidate="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @if(\Session::has('alert'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-app"></i></span>
                    <span class="alert-text">{{Session::get('alert')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  @endif
                  @if(\Session::has('alert-success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-app"></i></span>
                    <span class="alert-text">{{Session::get('alert-success')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  @endif
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                   <label for="password" class="control-label">Password</label>
                   <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                   <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="simple-footer">
            Copyright 
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{url('assets_dashboard/js/stisla.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<!-- Template JS File -->
<script src="{{url('assets_dashboard/js/scripts.js')}}"></script>
<script src="{{url('assets_dashboard/js/custom.js')}}"></script>
<script type="text/javascript">
  window.addEventListener( "pageshow", function ( event ) {
    var historyTraversal = event.persisted || 
    ( typeof window.performance != "undefined" && 
      window.performance.navigation.type === 2 );
    if ( historyTraversal ) {
      window.location.reload();
    }
  });
</script>
</body>
</html>
