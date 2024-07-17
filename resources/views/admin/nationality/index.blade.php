@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Nationalities</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-12">
    <a href="/admin/nationalities/create" class="btn btn-primary mb-3">Create new nationality</a>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nationality Code</th>
                <th scope="col">Nationality Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nationalities as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n['nationality_code'] }}</td>
                    <td>{{ $n['nationality_name'] }}</td>
                    <td>
                        <a href="/admin/nationalities/{{ $n['nationality_id'] }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/admin/nationalities/{{ $n['nationality_id'] }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                        <form action="/admin/nationalities/{{ $n['nationality_id'] }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="fas fa-times-circle"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
