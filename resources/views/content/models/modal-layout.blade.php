            <div class="modal-dialog modal-full-height modal-right modal-notify modal-success modal-lg" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header" style="background: rgba(229, 228, 226,0.7);">
                        <p class="heading lead">@yield('title')</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="black-text">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body" style="background: rgba(229, 228, 226,0.9);">
                        <div class="text-center">
                            <i class="fa fa-check fa-4x mb-3 animated rotateIn green-text"></i>
                            <p>
                              @yield('text-body')
                            </p>
                        </div>
                        <div>    
                          @yield('content-body')
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer justify-content-center" style="background: rgba(182, 182, 180 ,0.5);">
                        <a  class="btn btn-default btn-outline-secondary-modal waves-effect" data-dismiss="modal">fermer</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
       
      