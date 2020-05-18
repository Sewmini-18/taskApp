<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Update Task</title>
    <link rel="icon" href="...\resources\views\Queen.jpg">
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <div class="text-center">
            <h1>Update</h1><br />
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{$error}}</div>
                    @endforeach
                    <form action="/updateTasks" method="post">
                        {{csrf_field()}}

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Enter</span>
                            </div>
                            <input type="text" class="form-control" name="task" value="{{$taskData->task}}">
                            <input type="hidden" class="form-control" name="id" value="{{$taskData->id}}">
                            <div class="input-group-append" id="button-addon4">
                                <input class="btn btn-warning" type="submit" value="UPDATE">
                                <input class="btn btn-dark" type="button" value="CANCEL"
                                    onclick="window.location='/task'">

                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>

</html>