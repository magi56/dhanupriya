@extends('layout.app')

@section('title', 'User Details')

@section('content')
<div class="card">
    <div class="card-header text-center"><span class="fw-bold">USER DETAILS</span></div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="text-primary">Name</span></td>
                    <td>{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td><span class="text-primary">Email</span></td>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td><span class="text-primary">Phone</span></td>
                    <td>{{ $data['phone'] }}</td>
                </tr>
                <tr>
                    <td><span class="text-primary">Message</span></td>
                    <td>{{ $data['message'] }}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection
