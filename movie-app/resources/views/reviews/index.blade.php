@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
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
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The Shawshank Redemption</td>
                        <td>Morgan Freeman</td>
                        <td>9.8</td>
                        <td>The Shawshank adalah kisah tetntang dua pria yang menjalani hukuman seumur hidup di penjara dan menjadi teman dan menemukan cara untuk melawan keputusasaan dan membutuhkan kembali harapan.</td>
                        <td>2020-02-12</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>The God Father</td>
                        <td>Al Pacino</td>
                        <td>8.0</td>
                        <td>The God Father bercerita tentang kisah keluarga mafia terkuat di New York yang dipimpin oleh seorang pria keturunan italia bernama Vito Carleone yang kerap dipanngil Don Carleone. Di bawah kekuasaannya, grup Carleone menjadi "raja" di balik bayang-bayang kota New York.</td>
                        <td>2021-10-01</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Guardian Of The Galaxy</td>
                        <td>Chriss Pratt</td>
                        <td>9.9</td>
                        <td>Dalam film ini, Star-Lord dan timnya harus berusaha mengalahkan penjahat baru tersebut untuk melindungi semesta. Namun, dalam perjalanan mereka akan menemukan rahasia dari masa lalu mereka sendiri yang membuat kawanan harus mempertanyakan motivasi dan tujuan mereka sebagai Guardian Of The Galaxy.</td>
                        <td>2023-03-05</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Evil Dead Rise</td>
                        <td>Alyssa Sutherland</td>
                        <td>8.5</td>
                        <td>berkisah tentang Beth yang mengunjungi kakaknya, yaitu Ellie yang tinggal pada sebuah apartemen yang hendak dirobohkan bersama ketiga anaknya. Namun, malapetaka datanng ketika mereka menemukan sebuah buku misterius yang berada pada basemen apartemen. Setelah itu mereka mendapatkan teror yang sangat mengerikan karena Ellie terasuki sosok iblis kejam.</td>
                        <td>2023-10-05</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Seven Samurai</td>
                        <td>Toshiro Mifune</td>
                        <td>8.6</td>
                        <td>Bercerita tentang tujuh orang samurai yang direkrut oleh warga desa untuk melindungi mereka dari serangan para bandit.</td>
                        <td>2020-10-28</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection