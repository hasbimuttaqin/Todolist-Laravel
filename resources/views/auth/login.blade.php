<x-log>
@include('sweetalert::alert')

    <h1 class="text-center my-4">Login To Start TodolistApp</h1>

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{ asset('image/list2.svg') }}" style="width: 500px">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

              <form action="/loginproses" method="POST">
                    @csrf
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" value="{{ old('email') }}"/>
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>


                @error('email')
                <div class="text-danger"><strong>{{ $message }}</strong></div>

             @enderror


                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>

                  @error('password')
                  <div class="text-danger"><strong>{{ $message }}</strong></div>

               @enderror

                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                    <a href="/register" class="link-danger">Register</a></p>
                </div>


              </form>
            </div>
          </div>
        </div>
      </section>

</x-log>
