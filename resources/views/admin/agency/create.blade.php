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
            <div class="form">
              <h3 class="mb-5">Create Agency</h3>
              <form action="{{route('agency.store')}}" class="form">
                @csrf
              <div>
                <div class="mb-3">
                  <label for="" class="mx-5">Name:</label>
                  <input type="text" name="name">
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Phone:</label>
                  <input type="number"  name="phone">
                </div class="mb-3">
                <div class="mb-3">
                  <label for="" class="mx-5">Email:</label>
                  <input type="email" name="email" >
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Status:</label>
                  <input id="desactive" type="checkbox" name="status" value="0">
                  <input id="active" type="hidden" name="status" value="1">
                </div>

                <div class="ml-5">
                  <input type="submit" name="" id="">
                </div>
              </div>  
              </form>
            </div>
          </div>
        </div>
    <!-- partial:partials/_footer.html -->
    @include('admin.partials.footer')
    <!-- partial -->
    </div>
    <script>
    
    form.addEventListener('submit', () => {
    if(document.getElementById("active").checked) {
        document.getElementById('desactive').disabled = true;
    }
}
    </script>
    @include('admin.partials.script')
  </body>
