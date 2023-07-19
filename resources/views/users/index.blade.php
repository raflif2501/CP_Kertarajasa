@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Admin
                            <a href="{{ route('users.create') }}" type="button" class="btn btn-success"
                                style="float: right">Tambah
                                Admin</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-full-width table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $v)
                                                    {{ $v }}
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>&ensp;
                                            <input type="button" class="btn btn-sm btn-danger"
                                                data-id="{{ $user->id }}" onclick="deleteData(this)" value="Delete">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @include('users.scriptDelete')
@endsection
