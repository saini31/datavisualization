<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualization</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .chart {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
            align-items: center;
        }

        .chart div {
            margin: 20px;
        }

        .bar {
            fill: steelblue;
        }

        .bar:hover {
            fill: orange;
        }

        .link {
            fill: none;
            stroke: #ccc;
            stroke-width: 1.5px;
        }

        .node circle {
            fill: #fff;
            stroke: steelblue;
            stroke-width: 1.5px;
        }

        .node text {
            font: 10px sans-serif;
        }

        .tooltip {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px;
            border-radius: 3px;
            pointer-events: none;
        }

        .link,
        .node {
            transition: none !important;
            /* Remove transitions */
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: pink;
            color: white;
            height: 900px;
        }

        #sidebar a {
            color: black;
        }

        #content {
            flex-grow: 1;
            padding: 20px;
        }

        .navbar {
            margin-bottom: 0;
            height: auto;

        }

        .p {
            margin-left: 400px;
            margin-top: 30px;
        }

        label {
            color: blue;
        }

        .checkboxes {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .checkboxes label {
            margin: 0;
            padding: 0;
            margin-right: 15px;
        }

        .filter {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            margin: 5px;
        }

        .filter label {
            margin: 0 5px;

        }

        label[for="impact"] {
            color: green;
        }

        label[for="relevance"] {
            color: blue;
        }

        label[for="likelihood"] {
            color: red;
        }

        label[for="intensity"] {
            color: orange;
        }
    </style>
</head>

<body>
    <script src="{{ asset('dashboard.js') }}"></script>

    <div id="content" class="flex-grow-1">

    </div>
    <nav class=" fixed-top navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav id="sidebar" class=" fixed-top d-flex flex-column p-3 bg-warning ">
        <h4 class="text-center" style="color:black;">Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
    </nav>

    <div class="container p">
        <div class="row">
            <div class="col-lg-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Line Chart</h5>
                        <div id="linechart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Bar Chart</h5>
                        <div id="barchart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-10">

                            <div class="card-body">
                                <h5 class="card-title">Filters</h5>
                                <div id="filters" class="d-flex flex-wrap"></div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Radial Tree</h5>
                        <div id="radialtree"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Scatter Plot</h5>
                        <div id="scatterplot"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>