@if(Session::has('flash_msg'))
   
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('flash_msg')}}</strong>
    </div>

@endif