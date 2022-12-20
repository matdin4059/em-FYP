@extends('dashboard.dashboard-master')
@section('project-supervised')
<div class="page-header">
    <h3 class="page-title"> Form elements </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample">
                    <button type="button" class="btn btn-primary btn-icon-text mb-3">
                        <i class="mdi mdi-download btn-icon-prepend"></i>
                         Download 
                    </button>
                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-success me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection