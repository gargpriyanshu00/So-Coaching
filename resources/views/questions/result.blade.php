@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Your Results</h1>
            <h3>You answered {{ $correct_answers_count }} out of {{ $question_count }} correctly</h3>


            <div class="row">
                <div class="col-md-6">
                    <h2>Try another Quiz</h2>
                    <a href="/exams/view"><button class="btn btn-primary">Do it now</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
