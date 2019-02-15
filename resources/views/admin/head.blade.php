@php
    use \App\Http\Middleware\LocaleMiddleware;
@endphp


<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{route("admin")}}">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route("page-list")}}">Страницы<span class="sr-only"></span></a
                    </li>             
                    <li class="nav-item">
                      <a class="nav-link" href="{{route("page-reviews")}}">Отзывы<span class="sr-only"></span></a>
                    </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("settings")}}">Заявки<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("blogs")}}">Блог<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("alfabet-list")}}">Алфавит<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("portfolio-admin")}}">Портфолио<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("services-list")}}">Список услуг<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("typograph")}}">Типографика<span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route("role-list")}}">Роли<span class="sr-only"></span></a>
                      </li>
                  </ul>
                        <div class="text-white">
                            @if(App::getLocale() == "en")
                                Английская версия
                            @else
                                Русская версия
                            @endif
                        </div>
                        <div class="nav-item">
                            <a class="btn btn-danger" href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a>
                            <a class="btn btn-primary" href="{{route('setlocale', ['lang' => 'eng'])}}">Eng</a>
                        </div>
                </div>
              </nav> 
</header>
