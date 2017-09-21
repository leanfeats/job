@extends('layouts.app')

@section('content')
{{--         <h1><a href="/">Jobs</a></h1><br> --}}
        @if(count($jobs) > 0)
            @foreach($jobs as $job)
                <div class="well-sm well-nb">
                    <h4><a href="/jobs/{{$job->id}}">{{$job->title}}</a></h4>
                    <h4>{!!$job->body!!}</h4>
                    <hr>     
                </div>
            @endforeach
            {{$jobs->links()}}
        @else
           <p>No jobs found.</p>
        @endif
    </div>
@endsection
</body>
</html>