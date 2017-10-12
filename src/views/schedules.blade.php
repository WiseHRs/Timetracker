<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($schedulesList as $schedules)
            {{ $schedules->name }} <br>
        </option>
    @endforeach
</body>
</html>