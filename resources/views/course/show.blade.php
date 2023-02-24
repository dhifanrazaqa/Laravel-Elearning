<h3>{{ $course->name }}</h3>
<h3>{{ $course->category->name }}</h3>
<h3>{{ $course->curriculum }}</h3>
<hr>
@foreach ($course->courseContent as $content)
    <h3>{{ $content->title }}</h3>
    <p>{!! $content->description !!}</p>
    <h3>Quiz</h3>
    @foreach ($content->quiz as $quiz)
        <a href="/courses/{{ $course->slug }}/{{ $quiz->slug }}">{{ $quiz->title }}</a>
        <br>
    @endforeach
    <hr>
@endforeach