    <!-- plugins:js -->
    <script src="{{ asset('backend') }}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend') }}/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend') }}/admin/assets/js/off-canvas.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/js/misc.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/js/settings.js"></script>
    <script src="{{ asset('backend') }}/admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend') }}/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- General JS Scripts Update -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/datatables/datatables.min.js"></script>

    <script src="{{ asset('backend') }}/stisla/js/stisla.js"></script>

    <!-- JS Libraies -->

        <!-- Template JS File -->
    <script src="{{ asset('backend') }}/stisla/modules/owlcarousel2/owl.carousel.min.js"></script>
    <script src="{{ asset('backend') }}/stisla/modules/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('backend') }}/stisla/js/scripts.js"></script>
    <script src="{{ asset('backend') }}/stisla/js/custom.js"></script>
    {{-- <script src="{{ asset('backend') }}/stisla/js/page/modules-datatables.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{ LarapexChart::cdn() }}"></script>
    

    <script>
        $(() => {
        $("#table-1").dataTable({
            responsive : true
        });
        })
        
        $('.btn-delete').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        swal({
            title: "{{ __('message.dialog_title') }}",
            text: "{{ __('message.dialog_delete') }}",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            window.location.href = url;
            }
        });
        });
    </script>
    @stack('js')