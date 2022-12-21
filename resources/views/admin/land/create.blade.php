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
              <h3 class="mb-5">Create land</h3>
              <form action="{{route('land.store')}}" class="form">
                @csrf
              <div>
                <div class="mb-3">
                  <label for="" class="mx-5">Diagram:</label>
                  <input class="mx-4" type="text" name="diagram">
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Land Descripiton:</label>
                  <input class="mx-4" type="number"  name="landDescription">
                </div class="mb-3">
                <div class="mb-3">
                  <label for="" class="mx-5">Land Area:</label>
                  <input class="mx-4" type="email" name="landArea" >
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Land No:</label>
                  <input class="mx-4" type="email" name="landNo" >
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Land Price:</label>
                  <input class="mx-4" type="email" name="price" >
                </div>
                <div class="mb-3">
                  <label for="" class="mx-5">Agency:</label>
                  <input class="mx-4" type="email" name="agency" >
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
