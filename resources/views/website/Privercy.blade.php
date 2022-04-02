@extends('layouts.webadmin')
@section('title', 'privercy')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <h1>
                        {{$editprivercy->privercy_heading}}
                    </h1>

                    <p>
                        {!! $editprivercy->privercy_desc !!}
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection