@extends('layouts.master')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <h1>Contact Me</h1>
        <p>If you have any questions or would like to get in touch, please fill out the form below.</p>
        
        <form action="{{ url('/contact') }}" method="POST">
            @csrf 

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
