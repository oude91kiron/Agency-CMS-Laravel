<!-- Required meta tags -->

@include('admin.partials.head')

<body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.partials.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.partials.navbar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="{{asset('admin/assets/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">The Best Contant Mangment System for real state agencies</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our premium version with more features on our website!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Agencies</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                </label>
                              </div>
                            </th>
                            <th> Agency Created </th>
                            <th> Lands you added </th>
                            <th> Lands Value </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                </label>
                              </div>
                            </td>
                            <td>{{$agencies->count()}} Agency created</td>
                            <td>34 Lands Added</td>
                            <td> 112,000,000 $</td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Featured Lands </h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                </label>
                              </div>
                            </th>
                            <th> Land ID </th>
                            <th> Land Digram </th>
                            <th> Land Description </th>
                            <th> Land Directions </th>
                            <th> Area M2 </th>
                            <th> Land No </th>
                            <th> Price </th>
                            <th> Agency </th>
                            <th> Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- loop throw lands where price max --}}
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                </label>
                              </div>
                            </td>
                            {{-- $land->data['id', etc] --}}
                            <td> #3</td>
                            <td> 02312/b </td>
                            <td> Conrer </td>
                            <td> South and east </td>
                            <td> 152 m2 </td>
                            <td> 1254 </td>
                            <td> 3,500,000 $ </td>
                            
                            {{-- $agency->name --}}
                            <td> Omer Furkan </td> 
                            
                            <td> 23/10/2022</td>

                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.partials.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

@include('admin.partials.script')