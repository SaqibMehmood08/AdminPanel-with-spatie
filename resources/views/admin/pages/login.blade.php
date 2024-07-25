<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.layout.head')
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 p-0">


          <div class="login-card login-dark">

            <div>
              <div><a class="logo text-center" href="index.html"><img class="img-fluid for-dark" src="{{ asset('admin/assets/images/login/Web-Logo.png') }}" alt="looginpage"><img class="img-fluid for-light" src="{{ asset('admin/assets/images/login/Web-Logo.png') }}" alt="looginpage"></a></div>
           
              <div class="login-main py-1">

                <form  action="/login" method="post" class="theme-form text-center">
                    @csrf
                    <h4 >Sign in to account</h4>

                  <div class="form-group py-2">

                    <input class="form-control rounded-5 " type="text"  placeholder="User Name" name="username" style="background-color: white;color:black; border: 1px solid lightslategray " >
                  </div>
                  <div class="form-group py-2">

                    <div class="form-input position-relative">
                      <input class="form-control rounded-5" type="password" name="password"  placeholder="Password" style="background-color: white; color:black;border: 1px solid lightslategray ">
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="pb-2 text-end">
                       <a href="" class="text-secondary">Forgot Password</a>
                    </div>
                    <button class="btn btn-block text-white w-100 py-2 rounded-5" type="submit" style="background-color: #FF7600">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 p-5"><img class="img-fluid w-75 h-75 py-4 px-4 mt-5 ms-5" src="{{ asset('admin/assets/images/login/app.jpg') }}" alt="looginpage"></div>

      </div>
      @include('admin.layout.scripts')
      <!-- latest jquery-->
      <script src="../assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

      <script src="../assets/js/config.js"></script>

      <script src="../assets/js/script.js"></script>
    </div>
  </body>
</html>
