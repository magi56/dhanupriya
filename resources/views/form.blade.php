@extends('layout.app')

@section('title', 'User Form')

@section('content')
<div class="card">
    <div class="card-header text-center"> <span class="fw-bold">Registration Form</span></div>
    <div class="card-body">
     <form action="{{ route('submit.form') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label"><span class="fw-bold">Name:</span></label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><span class="fw-bold">Email:</span></label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><span class="fw-bold">Phone:</span></label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><span class="fw-bold">Message:</span></label>
                <input type="text" name="message" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
