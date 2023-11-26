@extends('layouts.master')

@section('title', 'Projects')

@section('content')
<div class="container">
    <h1>My Projects</h1>
    <p>Here are some of the projects I've worked on:</p>


    <div class="row">
        <!-- Project 1 -->
        <div class="col-md-4">
            <div class="project-item">
                <h3>FinTrackLaravel</h3>
                <p>An application for tracking personal finances, including income, expenses, and budgeting. Features
                    account management, transaction logging, and visual reports (charts, graphs). Users can set
                    financial goals and receive notifications for budget limits or savings milestones.</p>

            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4">
            <div class="project-item">
                <h3>LaravelEvents</h3>
                <p>A comprehensive system for creating and managing events. Users can browse events, book tickets, and
                    view event details. Event organizers can manage event listings, ticket sales, and attendee
                    information. Features might include an interactive calendar, email notifications, and social media
                    sharing options.</p>

            </div>
        </div>

        <div class="col-md-4">
            <div class="project-item">
                <h3>LaravelDine</h3>
                <p>A web application for booking restaurant tables. Features include browsing restaurants, viewing table
                    availability, and making reservations. Restaurants can manage their profiles, table layouts, and
                    reservation schedules. A review and rating system for customers can be an added feature.</p>

            </div>
        </div>
        <div class="col-md-4">
            <div class="project-item">
                <h3>EduLaravel</h3>
                <p>A platform for online courses where users can enroll in courses, watch instructional videos, and take
                    quizzes. Includes course management for instructors, user progress tracking, and a certification
                    system upon course completion. Could be extended with forums or interactive Q&A sections.</p>

            </div>
        </div>
        <div class="col-md-4">
            <div class="project-item">
                <h3>ShopLaravel</h3>
                <p>An e-commerce platform with product listings, shopping cart functionality, user authentication, and
                    an order management system. Includes an admin panel for managing products, categories, and orders.
                    Advanced features can include payment gateway integration, product recommendations, and customer
                    reviews.</p>

            </div>
        </div>

    </div>
</div>
@endsection