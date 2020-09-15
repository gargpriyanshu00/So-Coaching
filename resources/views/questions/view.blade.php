<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Logged in as Teacher</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<hr>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <hr>
    @extends('layouts.app')

    </h1></center>

    @section('content')
    <center><h1>Time Remaining in seconds to end quiz:
    <div id="counter">30</div></center>
        @if(count($questions) >= 1)
        <center>{!! Form::open(['action' =>['QuestionsController@result', $id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'form']) !!}
                       {{ csrf_field() }}
                       <?php $i = 1 ?>
                        @foreach($questions as $question)
                            <fieldset class="form-group row">
                            <h2><b>{{$i}}.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $question->body }}</b></h2>
                                <?php $j = 1 ?>
                                <div class="form-check">
                                    @foreach($answers as $answer)
                                        <div class="row">
                                        @if($answer->question_id == $question->id)

                                            <label class="form-check-label col-md-6" for="{{$answer->question_id}}">{{ $answer->answer }} </label>
                                            <input type="radio" class="form-check-input col-md-6" name="{{$answer->question_id}}" value="{{$answer->is_correct}}" {{ $j==1 ? 'checked' : '' }}>
                                            <?php $j++ ?>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                            </fieldset>
                            <?php $i++ ?>
                        @endforeach
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

                        {!! Form::close() !!}</center>
        @else
            <center>
                <p>No Questions!!</p>
            </center>
        @endif
        <br><br><hr>
        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 8433466260</a>
                <a href="#"><span>Email:</span> admission@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
@endsection

<script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("/exams");
            }
        }, 1000);
    </script>

