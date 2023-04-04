@if (session('msg'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="fa-solid fa-circle-xmark"></i>
            </span>
        </button>
    </div>
@endif
