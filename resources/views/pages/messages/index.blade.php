@extends('index')
@section('content')
@include('_common._form')
<hr>
    <div class="messages">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>User 1</span>
                    <div class="pull-right label label-info">
                        17:15:32/08.03.2017
                    </div>
                </h3>
            </div>

            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci debitis delectus dolore labore nesciunt non qui quod rem. Autem dolores, esse explicabo facilis illo laudantium molestias nam soluta ut voluptas?

                <hr>

                <div class="pull-right">
                    <a href="#" class="btn btn-info">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>

                    <a href="#" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop