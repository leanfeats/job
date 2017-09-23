@extends('layouts.app')

@section('content')
        <a href="/jobs" class="btn btn-default">Go Back</a>
		<h1>{{$jobs->title}}</h1>
		<div>
			{!!$jobs->body!!}
		</div>
@endsection
</body>
</html>