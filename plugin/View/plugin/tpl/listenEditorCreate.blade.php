@if(isset($editor_create))
    @if(!empty($editor_create))
        @foreach($editor_create as $k=>$v)
            @include('plugin.tpl.editor.'.$v['type'])
            <script>
                editor("{{ $v['id'] }}")
            </script>
        @endforeach
    @endif
@endif