<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
       
    
        <title>Task</title>
       
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <div class="text-center">
            <h1>Task</h1><br />
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{$error}}</div>
                    @endforeach

                    <form action="/saveTask" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Enter</span>
                            </div>
                            <input type="text" class="form-control" name="task" placeholder="Enter the task">
                            <div class="input-group-append" id="button-addon4">
                                <input class="btn btn-primary" type="submit" value="SAVE" >
                                <input class="btn btn-secondary" type="reset" value="CLEAR">
                            </div>
                        </div>
                    </form>

                    <br />
                    <table class="table table-sm text-left table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"># ID </th>
                                <th scope="col" width="40%">Task</th>
                                <th scope="col">IsCompleted</th>
                                <th scope="col"width="35%">Action</th>

                            </tr>
                        </thead><br>
                        <tbody class="table-info">

                         @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td scope="col" >{{$task->task}}</td>                              
                                <td>
                                    @if($task->IsCompleted)
                                    <button class="btn btn-success btn-sm" style="cursor:default;" >Completed</button>
                                    @else
                                    <button class="btn btn-warning btn-sm" style="cursor:default;" >Not Completed</button>
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @if(!$task->IsCompleted)
                                            <a href="/markAsCompleted/{{$task->id}}" class="btn btn-dark btn-sm">Mark As Completed</a>
                                        @else
                                            <a href="/markAsNotCompleted/{{$task->id}}" class="btn btn-light btn-sm">Mark As Not Completed</a>
                                        @endif
                                        </div>
                                       
                                    <div class="col-sm-3"><a href="/deleteTask/{{$task->id}}" class="btn btn-danger btn-sm">Delete</a></div>
                                    <div class="col-sm-3"><a href="/updateTask/{{$task->id}}" class="btn btn-info btn-sm">Update</a></div>
                                    </div>

                                </td>
                            </tr>
                           @endforeach

                           

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</body>

</html>