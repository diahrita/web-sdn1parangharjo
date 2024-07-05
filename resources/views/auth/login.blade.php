@extends('layouts.layouts')

@section('content')
    <section>
      <div class="img js-fullheight py-5 col-xxl-6">
          <div class="container-fluid text-dark bg-opacity-10">
              <div class="row">
                  <div class="col-md-4 offset-md-4">
                      <div class="card bg-light border-danger" style="border-radius: 20px">
                          <div class="card-body">
                              <div class="text-center mb-4">
                                  <img src="{{ asset('assets/icons/logo-sd.png')}}" class="img-fluid mb-2" width="70">
                                  <h3 class="text-center">Login</h3>
                              </div>


                              {{-- Alert ketika success dan error --}}
                              @if (Session::has('success'))
                                  <div class="alert alert-success">
                                      {{ Session::get('success') }}
                                      @php
                                          Session::forget('success');
                                      @endphp
                                  </div>
                              @endif
                              @if (Session::has('error'))
                                  <div class="alert alert-warning">
                                      {{ Session::get('error') }}
                                      @php
                                          Session::forget('error');
                                      @endphp
                                  </div>
                              @endif

                              <!-- Menampilkan Error form validation -->
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                  <b>There was an error in the data input process</b> <br>
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                              @endif

                              <form action="/login" method="POST">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="text" class="form-control" id="email" name="email">
                                  </div>
                                  <div class="mb-3">
                                      <label for="password" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="password" name="password">
                                  </div>
                                  <div class="d-grid gap-2 mt-4">
                                      <button type="submit" class="btn btn-primary" type="button">Login</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection