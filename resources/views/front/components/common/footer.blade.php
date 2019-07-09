 <!-- Footer -->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <p class="copyright" style="color:#fff;"><a style="color:#fff;font-size:20px;" href="{{url('/documentation.pdf')}}"> Documentation </a><br><br>
          Copyright &copy; Vladimir Mitrović {{ date('Y', time()) }}</p>
        </div>
      </div>
    </div>
  </footer>
  <input type="hidden" value="{{url('/')}}" id="url" name="url">