@extends('layouts.base')
@section('content')
 
 <a href="article/add" style="margin-left: 20px"><Button class="btn btn-info"> Create Article </Button></a>
<div style="text-align:center" class="panel-body">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Description</th>
            <th>Image name</th>
            <th>Is Live</th>
            <th style="min-width: 100px;">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)                                    
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td style="max-width: 850px">{{$article->article}}</td>
                <td style="width: 100px">{{$article->description}}</td>
                <td>{{$article->image_name}}</td>
                <td>@if($article->is_live)  yes  @else no @endif</td>
                <td>
                    <a href="article/{{$article->id}}"><button class="btn btn-success" type="button" style="text-decoration: none; float: left; margin-right: 5px;">View</button></a>

                    <a href="article/{{$article->id}}/edit"><button class="btn btn-warning" type="button" style="text-decoration: none; float: left; margin-right: 5px;">Edit</button></a>

                    <a class="btn btn-danger DeleteConfirmDialog" data-id="{{$article->id}}"  href="article/{{$article->id}}/destroy" style="text-decoration: none; float: left;">Delete</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection

