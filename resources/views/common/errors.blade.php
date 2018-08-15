
@if(count($errors) > 0)

    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br>

        <ul>
            @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
    </div>
@endif