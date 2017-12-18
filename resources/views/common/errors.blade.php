<!-- errors of task when  validation of form-->
@if (count($errors))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('messages.errors')</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- alert of task when saved or deleted  -->
@if (session('alert'))
    <div class="alert alert-danger">
            <strong>@lang('messages.alerts')</strong>
            <br><br>  
        {{ session('alert')  }}
    </div>
@endif
