
@extends('layout.app2') 



@section('content')
    <div class="dashboard-container">
        <h2>Welcome, {{ $name }}</h2>

        <div class="section">
            <h3>Profile Information</h3>
            <p>Email: {{ auth()->user()->email }}</p>
            
        </div>

        
    </div>
@endsection





