<!-- resources/views/announcements/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Announcement</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route
