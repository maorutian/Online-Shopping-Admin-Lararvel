@extends('layout.customer.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Enter your Email, get 50% off code!
                </h2>
                <form name="sentMessage" action="{{route('email')}}" method="post" id="contactForm" novalidate>
                    {{csrf_field()}}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" id="email" value="{{ old('email') }}" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
