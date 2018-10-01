<script type="text/javascript">

    var Electronic = Electronic || {};

    Electronic.languages = {
        'notices_msg': {
            'success': '{{ trans('bases::layouts.success') }}!',
            'error': '{{ trans('bases::layouts.error') }}!'
        },
    }
</script>

@if (session()->has('success_msg') || session()->has('error_msg') || isset($errors) || isset($error_msg))
    <script type="text/javascript">
        $(document).ready(function () {

            @if (session()->has('success_msg'))
            Electronic.showNotice('success', '{{ session('success_msg') }}', Electronic.languages.notices_msg.success);
            @endif
            @if (session()->has('error_msg'))
            Electronic.showNotice('error', '{{ session('error_msg') }}', Electronic.languages.notices_msg.error);
            @endif
            @if (isset($error_msg))
            Electronic.showNotice('error', '{{ $error_msg }}', Electronic.languages.notices_msg.error);
            @endif
            @if (isset($errors))
            @foreach ($errors->all() as $error)
            Electronic.showNotice('error', '{{ $error }}', Electronic.languages.notices_msg.error);
            @endforeach
            @endif
        });
    </script>
@endif