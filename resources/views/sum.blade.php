<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <!-- <div class="title m-b-md">
                    Summation
                </div> -->
                <!-- <p>Result = <?php echo $result; ?></p> -->
                <!-- <p>Result = {{ $result }}</p> -->
                <!-- <p>My Name is : {{ $result }}</p>{{$result}}<br> -->

                <!-- @php
                    $result_1 = $result * 10;
                @endphp

                <?php 
                    if($result % 2 == 0){
                        echo "Even Number <br>";
                    }
                    else{
                        echo "Odd Number <br>";
                    }
                ?> -->

                <!-- @if($result % 2 == 0)
                {{ "Even Number" }} <br>
                @else
                {{ "Odd Number"}} <br>
                @endif -->

                <!-- @switch($result)
                    @case(20)
                        <p style="color: red;">{{ "Twoenty "}}</p>
                        @break
                    @case(21)
                        <p>{{ "Twoenty One"}}</p>
                        @break
                    @default
                        <p>{{ "Not Found"}}</p>
                @endswitch
 -->
                <!-- <p> {{ $result_1 }} </p> -->

               <!--  @for($i=0; $i<=10; $i++)
                    <p style="background-color: #f6f6f6;">{{ $i }}</p>
                @endfor
                
                @{{ "fajllajwojfla" }} -->

                <!-- @foreach($data as $k => $d)
                    <p><strong>{{ $k }} : </strong>{{ $d }}</p>
                @endforeach -->

                <!-- @if(count($data) > 0)
                    @foreach($data as $k => $d)
                        <p><strong>{{ $k }} : </strong>{{ $d }}</p>
                    @endforeach
                @else
                    <p>{{ "No Data Found !" }}</p>
                @endif -->

                @forelse($data as $k => $v)
                    <!-- <p>{{ $loop->index }}. <strong>{{ $k }} : </strong>{{ $v }}</p> -->
                    <!-- <p>{{ $loop->iteration }}. <strong>{{ $k }} : </strong>{{ $v }}</p> 
                    $loop->index
                    $loop->iteration
                    $loop->first
                    $loop->last
                    $loop->odd
                    $loop->even
                    -->
                    <p {{ $loop->even ? "style=color:red;" : "style=color:green;" }}><strong>{{ $k }} : </strong>{{ $v }}</p>
                @empty
                    <p>{{ "No Data Found !" }}</p>
                @endforelse

            </div>
        </div>
    </body>
</html>
