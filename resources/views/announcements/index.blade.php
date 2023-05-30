<!-- resources/views/announcements/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Announcements</h1>

    @if ($announcements->isEmpty())
        <p>No announcements available.</p>
    @else
        <ul>
            @foreach ($announcements as $announcement)
                <li>
                    <h3>{{ $announcement->title }}</h3>
                    <p>{{ $announcement->content }}</p>
                    <p>Posted on: {{ $announcement->created_at->format('F j, Y') }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
