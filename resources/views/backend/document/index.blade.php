@extends('backend.layouts.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboards') }}" data-toggle="ajax">Home</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $title }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                @can('create-documents')
                    <div class="col-12 text-right mb-2">
                        <button class="btn btn-primary waves-effect waves-light add" data-toggle="modal"
                            data-target="#documentModal" type="button"><i class="feather icon-plus"></i> Tambah
                            Dokumen</button>
                    </div>
                @endcan
                <table class="table zero-configuration" id="dataTable" data-url="{{ route('documents.get-data') }}"
                    width="100%">
                    <thead>
                        <th>No.</th>
                        <th>Nama Dokumen</th>
                        <th>File</th>
                        <th>Jenis Dokumen</th>
                        <th>Keterangan</th>
                        <th>Link Referensi</th>
                        <th>Publish</th>
                        <th></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @include('backend.document.partials.form')
@endsection
