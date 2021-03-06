@extends('layouts.master')

@section('content')
    <section class="row new-post">
    <div class="col-md-6 offset-md-3">
        <header><h3>What do you have to say?</h3></header>
        <form action="{{ route('post.create') }}" method="post">
            <div class="form-group">
                <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"> Create Post </button>
            <input type="hidden" value="{{Session::token()}}" name="_token">
        </form>
    </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p> erererzrzer zr zerz gr er rtfgr rzr yrh etety egdt ettrtr gert rt dtrt. </p>
                <div class="info">
                    Posted by Me
                </div>
                <div class="interaction">
                    <a href="#">Like </a>|
                    <a href="#"> Dislike </a>|
                    <a href="#"> Edit </a>|
                    <a href="#"> Delete</a>
                </div>
            </article><br>

            <article class="post">
                <p> erererzrzer zr zerz gr er rtfgr rzr yrh etety egdt ettrtr gert rt dtrt. </p>
                <div class="info">
                    Posted by You
                </div>
                <div class="interaction">
                    <a href="#">Like </a>|
                    <a href="#"> Dislike </a>|
                    <a href="#"> Edit </a>|
                    <a href="#"> Delete</a>
                </div>
            </article>
        </div>
    </section>


@endsection


