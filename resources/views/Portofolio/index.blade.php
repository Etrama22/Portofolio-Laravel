@extends('adminlte::page')
@section('title', 'Skill Portofolio')
@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Tabel Skill</li>
        </ol>
    </nav>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex;
 justify-content: space-between;
 align-items: center;">
                            <span id="card_title">
                                <h3>Tabel Skill</h3>
                            </span>
                            <div class="float-right">
                                @include('Portofolio.search', [
                                    'url' => 'Portofolio',
                                    'link' => 'Portofolio',
                                ])
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        <th>Skill</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portofolio as $portofolios)
                                        <tr>
                                            <td>{{ $portofolios->id }}</td>
                                            <td>{{ $portofolios->skill }}</td>
                                            <td>
                                                <form action="{{ route('Portofolio.destroy', $portofolios->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('Portofolio.show', $portofolios->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i> Lihat</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('Portofolio.edit', $portofolios->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> Ubah</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-fw fa-trash">
                                                        </i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $portofolio->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
