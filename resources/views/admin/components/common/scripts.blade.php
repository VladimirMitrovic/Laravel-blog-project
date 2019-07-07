<script>
    const BASE_URL = '{{ url("/") }}';
    const TOKEN = '{{ csrf_token() }}';
</script>
<!-- Jquery Core Js -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('admin/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<input type="hidden" value="{{url('/')}}" id="url" name="url">
<script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('admin/plugins/node-waves/waves.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('admin/js/admin.js') }}"></script>

<!-- Custom Ajax -->
<script src="{{ asset('js/ajaxDelete.js') }}"></script>

<!-- Demo Js -->
<script src="{{ asset('admin/js/demo.js') }}"></script>

<script>
 $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
</script>


@yield("scripts")
