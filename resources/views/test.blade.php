<html>

<head>
    <title>HERE Auto-complete</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
<div>
    <p id="coords">Location: searching....</p>
    <input size="40" id="place" type="text" placeholder="Search a Place...">
    <input size="40" id="address" type="text" placeholder="Search an Address...">
    <input size="40" id="full" type="text" placeholder="Search Something...">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('development/js/here.js') }}"></script>

</body>

</html>
