<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
</head>
<body>
    <h2>Upcoming Events</h2>
    
    <ul>
        @foreach (event as $event )
            <li>
                {{ event['name'] }} - 
                {{ event['date'] }}

                <a href="{{ url('/events/register/'.$event['id']) }}">
                    Register
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
