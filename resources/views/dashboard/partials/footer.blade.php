<footer class="footer bg-dark  jumbotron">
    <div class="container text-white py-5">
        <div class="row">
            <div class="col-md-3">
                <h2>{{env('APP_NAME')}}</h2>
            </div>
            <div class="col-md-9">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Sign out</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>    
</body>
</html>