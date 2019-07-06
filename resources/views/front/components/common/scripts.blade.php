<script>
    const BASE_URL = '{{ url("/") }}';
    const TOKEN = '{{ csrf_token() }}';
</script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/clean-blog.min.js') }}"></script>

<script src="{{ asset('js/ajax.js') }}"></script>
<script>
 $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
</script>