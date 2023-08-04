@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azioni</th>                            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)  
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="#"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href=""><i class="fas fa-pen"></i></a>
                                <form class="d-inline-block" action="#" onsubmit="return confirm('Sei sicuro di voler cancellare questo fumetto?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection