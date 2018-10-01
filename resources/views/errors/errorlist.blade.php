@if ($errors->any())
    <?php
        $errorsToDisplay = $errors->all();
        $errorsToDisplay = array_unique($errorsToDisplay);
    ?>
    <div class="alert alert-danger">
        Please correct the following errors before moving forward.
        <ul>
            @foreach ($errorsToDisplay as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif