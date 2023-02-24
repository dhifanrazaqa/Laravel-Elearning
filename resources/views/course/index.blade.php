@foreach ($courses as $course)
    <a href="/courses/{{ $course->slug }}"><h3>{{ $course->name }}</h3></a>
    <b>{{ $course->category->name }}</b>
    <h5>{{ $course->curriculum }}</h5>
@endforeach