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
                  <div class="row card-body">
                    <div class="col-8 grid-margin">
                      <h4 class="card-title">Lands Table</h4>
                    </div>
                    <div class="col-4 grid-margin text-right">
                      <a class=" btn btn-primary create-new-button my-3" href="{{route('land.create')}}">Add New Land + </a>
                      
                      <form class="inline" action="">
                        <input placeholder="Search" type="text">
                      </form>
                    </div>
                    
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
                            <th>ID</th>
                            <th> Diagram</th>
                            <th> Descripiton</th>
                            <th> Directions</th>
                            <th> Area M2</th>
                            <th> Land No</th>
                            <th> Price</th>
                            <th> Agency</th>
                            <th> Created Date</th>
                            <th>Setings</th>


                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($agencies as $agency)
                            @foreach ($agency->lands as $land)
                              <tr>
                                <td>
                                  <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                    </label>
                                  </div>
                                </td>
                                <td>{{$land->id}}</td>
                                <td>{{$land->landDigramNo}}</td>
                                <td>{{$land->landDescription}}</td>
                                <td>{{$land->landDirections}}</td>
                                <td>{{$land->landArea}}</td>
                                <td>{{$land->landNo}}</td>
                                <td>{{$land->price}}</td>
                                <td>{{$land->agency->name}}</td>
                                <td>{{$land->created_at}}</td>
                                <td>
                                  <a href="" title="View"><i class="mdi  mdi-eye mr-2" ></i></a>
                                  <a href="" title="Edite"><i class="mdi  mdi-table-edit mr-2"></i></a>
                                  <a href="" title="Delete"><i class="mdi mdi-delete mr-2"></i></a>
                                </td>
                              </tr>
                              @endforeach                      
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:partials/_footer.html -->
        @include('admin.partials.footer')
      </div>
    <!-- main-panel ends -->
    </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('admin.partials.script')