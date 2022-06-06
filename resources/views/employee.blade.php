<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>    
    <title>PDF File</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h1 class="bg-success" style="margin-top: 5px;">
                    <center>Show All Data</center>
                </h1>
                <a class="btn btn-info mt-05" href="download-pdf">Print Data</a>
                <a class="btn btn-primary" href="/">Back</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Srl No</th>
                            <th scope="col">Employee Id</th>
                            <th scope="col">Employee Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $data)
                            <tr>
                                <th scope="row">{{ $data->id}}</th>
                                <td>{{ $data->employee_id}}</td>
                                <td>{{ $data->employee_name}}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>