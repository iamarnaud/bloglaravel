
@extends('layouts.master')

@section('title')
    Welcome !
@endsection

@section('content')
    @if(count($errors) > 0)
    <div class='row'>
        <div class="col-md-4" "col-md-offset-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul> 
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
        <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group"> 
                    <label for="email">Your E-Mail</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{Request::old('email')}}"> 
                </div>
                <!-- If using Bootstrap 4 need to add 'is-invalid' instate of 'has-error'-->

                <div class="form-group"> 
                    <label for="first_name">Your First Name</label>
                    <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div> <!-- Value Old garde l'ancienne donnée si le formulaire n'est pas correct pour ne pas tout retapper-->

                <div class="form-group"> 
                    <label for="password">Your Password</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="col-md-6">
        <h3>Sign In</h3>
            <form action="{{ route('signin')}}" method="post">
                <div class="form-group"> 
                    <label for="email">Your E-Mail</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>

                <div class="form-group"> 
                    <label for="password">Your Password</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> <!-- on aura toujours à inclure cette section avec Laravel-->
            </form>
        </div>
    </div>
@endsection

