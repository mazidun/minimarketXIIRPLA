@extends('layout.layout')
@section('title', 'Halaman Perusahaan')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h3 text">Data Perusahaan</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">Nama Perusahaan
                            </div>
                            <div class="col-md-1">:
                            </div>
                            <div class="col-md-6">{{ $perusahaan->nama_perusahaan }}
                            </div>
                            <div class="col-md-5">Alamat
                            </div>
                            <div class="col-md-1">:
                            </div>
                            <div class="col-md-6">{{ $perusahaan->alamat }}
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('/dashboard') }}/perusahaan/edit">
                                <btn class="btn btn-outline-success">EDIT</btn>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
