@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="bg-dark text-white"  scope="col"><h2 class="fw-bold">Id</h2></th>
                        <th class="bg-dark text-white"  scope="col"><h2 class="fw-bold">Title</h2></th>
                        <th class="bg-dark text-white"  scope="col"><h2 class="fw-bold">Slug</h2></th>
                        <th class="bg-dark text-white"  scope="col"><h2 class="fw-bold">Azioni</h2></th>                            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)  
                        <tr>
                            <th class="bg-info fw-bold" scope="row">{{ $project->id }}</th>
                            <td class="bg-info fw-bold">{{ $project->title }}</td>
                            <td class="bg-info fw-bold">{{ $project->slug }}</td>
                            <td class="bg-info fw-bold">
                                <a class="btn btn-dark btn-sm" href="#"><i class="fas fa-eye"></i></a>
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