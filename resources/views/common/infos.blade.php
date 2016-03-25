<!-- resources/views/common/infos.blade.php -->

@if (isset($infos) && count($infos) > 0)
        <!-- Form Error List -->
<div class="alert alert-info">
    <ul>

        @foreach($infos as $info)
            <li>{{ $info }}</li>
        @endforeach
    </ul>
</div>
@endif

