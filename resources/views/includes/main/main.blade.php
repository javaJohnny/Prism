@section('main')
<div class="side">
    @include('includes.main.side')
</div>
<div class="dashboard">
    @yield('content')
</div>
@endsection
