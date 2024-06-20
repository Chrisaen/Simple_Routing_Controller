<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>{{ $aboutContent }}</p>
    <nav>
        <a href="{{ route('about') }}">About Me</a>
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('hobbies') }}">Hobbies</a>
    </nav>
</body>
</html>
