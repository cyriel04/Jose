@extends('layouts.master')


@section('content')
<div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="title m-b-md">
                    JOSE
                </div>
            </div>

            <div class="row">
                @foreach ($peoples as $people)
                    <li>{{ $people }}</li>
                @endforeach
            </div>
        </div>
@endsection

@section('css')
    <style>
            html, body {
                background-color: #fff;
                color: red;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
            


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

@endsection

@section('js')
@endsection