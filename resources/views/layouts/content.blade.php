  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <div class="container-fluid">
            @if (Session::has('bisalogin'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('bisalogin') }}
            </div>
        @endif
        @if (Session::has('guest'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get('guest') }}
        </div>
    @endif




                  @include('layouts.tables')

              </div>
              <a class="scroll-to-top rounded" href="#page-top">
                  <i class="fas fa-angle-up"></i>
              </a>

          </div>
          <!-- End of Main Content -->

      </div>
      <!-- End of Page Wrapper -->

  </div>
  <!-- End of Content Wrapper -->
