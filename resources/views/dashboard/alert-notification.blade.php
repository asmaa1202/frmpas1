@if ($notification = Session::get('success'))
    <div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
        <div class="ml-2">{{ $notification }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if ($notification = Session::get('error'))
    <div class="alert alert-danger ">
        {{ $notification }}
    </div>
@endif


@if ($notification = Session::get('warning'))
    <div class="alert alert-warning ">
        {{ $notification }}
    </div>
@endif


@if ($notification = Session::get('info'))
    <div class="alert alert-info ">
        {{ $notification }}
    </div>
@endif


{{-- @if ($errors->any())
    <div class="alert alert-danger">
        {{ $notification }}
    </div>
@endif --}}
