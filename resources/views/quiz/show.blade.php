<h5>Jumlah soal {{ $question->total() }}</h5>

<form action="{{ url()->full() }}" method="POST">
  @csrf
  @foreach ($question as $item)
      <h5>{{ $item->question }}</h5>
      <input type="text" name="question" value="{{ $item->id }}" hidden>
      <input type="text" name="quiz" value="{{ $info->id }}" hidden>
      <hr>
  @endforeach


  @foreach ($answer as $ans)
  {{-- <input type="radio" id="answer" name="answer" value="{{ $ans->answer }}" {{ (old('answer') == '{{ $ans->answer }}') ? 'checked' : '' }}> --}}
  <label>
    @if (!empty($studentAns) && ($studentAns->answer_id == $ans->id) )
        <input type="radio" name="answer" value="{{ $ans->id }}" checked>
    @else
        <input type="radio" name="answer" value="{{ $ans->id }}">
    @endif
    {{ $ans->answer }}
  </label><br>
  @endforeach

  <input type="text" name="type" value={{ !empty($studentAns) ? "update" : "post" }} hidden>

  {{-- <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">submit</button> --}}
  
  {{ $question->links() }}
</form>
