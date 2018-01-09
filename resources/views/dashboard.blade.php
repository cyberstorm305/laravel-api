@extends('layouts.app')


@section('content')

    <div id="dashboard">
        <h3>dashboard</h3>


        <div class="card card-container">
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>




    </div>





@endsection