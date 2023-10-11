
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Question Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    width: 850px;
    background: #fff;
	margin: 0 auto;
    padding: 20px 30px 5px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    min-width: 50px;
    border-radius: 2px;
    border: none;
    padding: 6px 12px;
    font-size: 95%;
    outline: none !important;
    height: 30px;
}
/* Custom CSS for action buttons */
.action-buttons {
    display: flex; /* Display the buttons in a row */
    align-items: center; /* Vertically center the buttons */
}

.action-buttons a,
.action-buttons button {
    margin-right: 10px; /* Add margin between the buttons */
}

.table-title {
    min-width: 100%;
    border-bottom: 1px solid #e9e9e9;
    padding-bottom: 15px;
    margin-bottom: 5px;
    background: rgb(0, 50, 74);
    margin: -20px -31px 10px;
    padding: 15px 30px;
    color: #fff;
}
.table-title h2 {
    margin: 2px 0 0;
    font-size: 24px;
}
table.table {
    min-width: 100%;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 40px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table td a {
    color: #2196f3;
}
table.table td .btn.manage {
    padding: 2px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 2px;
}
table.table td .btn.manage:hover {
    background: #2e9c81;		
}
ul {
    list-style: none;
    padding: 0;
}

li.category-score {
    margin-bottom: 10px;
}

span.category-name {
    font-weight: bold;
    margin-right: 10px;
}

span.percentage {
    color: #007bff; /* Set the desired text color */
    font-weight: bold;
}
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 200px; /* Adjust the width as needed */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
    font-weight: bold;
}

.card-body {
    color: #007bff; /* Set the desired text color */
    font-weight: bold;
}


</style>
<!--  -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">Questionnaire</a>

        <a class="navbar-brand" href="{{ route('diagnostics.userIndex') }}">Diagnostique de l'entreprise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<br>
<hr>

<div class="card-container">
    @foreach($categoryScores as $categoryScore)
        <div class="card">
            <div class="card-header">{{ $categoryScore['category'] }}</div>
            <div class="card-body">{{ number_format($categoryScore['percentage'], 2) }}%</div>
        </div>
    @endforeach
</div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</html>