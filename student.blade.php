<html>
<head>
	<title>Student Name</title>
</head>

<body>
	<h1>Student Attendance List</h1>
	<h2>Student who are absent</h2>
	<ul>
	  @foreach ($togo as $absent)
		<li>{{ $absent->name }}</li>
	  @endforeach
	</ul>

	<h2>Student who are present</h2>
	<ul>
          @foreach ($attendance as $present)
                <li>{{ $present->name }}</li>
          @endforeach
	</ul>
</body>
</html>
