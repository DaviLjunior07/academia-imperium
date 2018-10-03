@if(Session::has('success'))
    <div class="alert alert-success" role="alert" style="margin-top: 20px;color: #fff">
        <strong><i class="material-icons">check_circle</i> Sucesso!</strong> {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger" role="alert" style="margin-top: 20px;color: #fff">
        <strong> <i class="material-icons">report_problem</i> Opss...</strong> {{ Session::get('error') }}
    </div>
@endif
