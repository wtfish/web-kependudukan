@extends('layouts.main')
@section('body')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>KK</th>
                            <th>WAKTU KEMATIAN</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>KK</th>
                            <th>WAKTU KEMATIAN</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                SD
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

