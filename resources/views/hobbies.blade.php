<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies</h1>
    <p>{{ $hobbiesContent }}</p>
    <nav>
        <a href="{{ route('about') }}">About Me</a>
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('hobbies') }}">Hobbies</a>
    </nav>
</body>
</html>
