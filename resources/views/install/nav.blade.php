
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="//{{ config('copyright.domain') }}">{{ config('copyright.system_name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @if(!empty($nav=config('copyright.installs')))
                    @foreach($nav as $k=>$v)

                        <a class="nav-item nav-link {{ $k==$index?'active':'' }}" href="javascript:void(0)">{{ lang($v) }} <span class="sr-only">(current)</span></a>
                    @endforeach
                @endif


                <a href="//{{ config('copyright.domain') }}"  class="nav-item nav-link" target="_blank">{{ lang('官网') }}</a>
            </div>
        </div>
    </div>

</nav>