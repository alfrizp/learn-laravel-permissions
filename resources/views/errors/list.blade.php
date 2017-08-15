@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            <li>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </li>
        </ul>
    </div>
@endif