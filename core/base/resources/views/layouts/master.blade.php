@extends('bases::layouts.base')

@section ('page')


    <?php
    $userName = '';
    $createdDate = '';
    if (Sentinel::check()) {
        $user = Sentinel::getUser();
        $userName = (isset($user->full_name) && !empty($user->full_name) ? $user->full_name : '');
    }
    ?>

    <div id="wrapper">

        @include('bases::partials.navigation')

        <div id="container-wrapper" class="container-wrapper">

            @include('bases::partials.container_navigation')

            @include('bases::partials.container_header')

            <div id="container-content" class="container-content">
                @yield('content')
            </div>

        </div>
    </div>
@stop