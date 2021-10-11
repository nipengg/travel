
@extends('layouts.success')

@section('title')
    Success
@endsection

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
        <h1>Yay! Success</h1>
        <p>
          We've Sent you email for trip instruction
          <br/>
          please read it as well
        </p>
        <a href="{{ url('/') }}" class="btn-home-page btn mt-3 px-5">Home Page</a>
      </div>
    </div>
</main>
@endsection