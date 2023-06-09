@extends('layouts/main')

@section('content')
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Muhammad Renjun</td>
                    <td>Injul</td>
                    <td>injul123</td>
                    <td>muhammadinjul@gmail.com</td>
                    <td>Administrator</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ramadhan Haechan</td>
                    <td>Ecaann</td>
                    <td>ecan123</td>
                    <td>orangganteng@gmail.com</td>
                    <td>user</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Haruto</td>
                    <td>Watanabe</td>
                    <td>rutoya123</td>
                    <td>harutowatanabe@gmail.com</td>
                    <td>user</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Junkyu</td>
                    <td>Kim Jk</td>
                    <td>kiyiwo123</td>
                    <td>kimjunkyu@gmail.com</td>
                    <td>user</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nayla Putri</td>
                    <td>Nayla</td>
                    <td>orangcantik123</td>
                    <td>naylaputri@gmail.com</td>
                    <td>user</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection