@extends('layouts.main-layout')

@section("content")

    <div class="container">
        <h1>
            Best Movies Ever
        </h1>
        <div class="card">
            <div class="column">
                <ul>
                    @foreach ($movies as $movie)
                        <li>
                            {{$movie -> id}}
                            {{$movie -> title}}
                            {{$movie -> original_title}}
                            {{$movie -> nationality}}
                            {{$movie -> date}}
                            {{$movie -> vote}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

@endsection