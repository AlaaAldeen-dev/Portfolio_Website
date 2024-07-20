@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">

            <h1>Typer Title</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Title</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.typer-title.create') }}" class="btn btn-primary">Create New <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
