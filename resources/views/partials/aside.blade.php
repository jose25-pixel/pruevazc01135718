<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    
    @if(empty(Auth::user()->photo))
                        
      <img class="img-fluid" width="60" src="{{ asset('images/avatar-perfil.png')}}" alt="foto-perfil">
      @else
      <img class="img-fluid" width="60" src="{{ asset('storage/'.Auth::user()->photo) }}" alt="foto-perfil">
    @endif
{{--++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->nombre }}</p>
      @if (Auth::user()->role_id == 1)
        <p class="app-sidebar__user-designation">Administrador</p>          
      @elseif(Auth::user()->role_id == 2)
        <p class="app-sidebar__user-designation">Docente</p>
        @else
        <p class="app-sidebar__user-designation">Estudiante</p>
      @endif
    </div>
  </div>
  <ul class="app-menu">

    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                @else

    @if(auth()->user()->hasRoles([1]))
    <li class="treeview"><a class="app-menu__item {{ route('user.index') }}" href="{{ route('user.index') }}"><i class="app-menu__icon fab fa-product-hunt"></i><span class="app-menu__label">usuarios</span></a>
    </li>
    <li class="treeview"><a class="app-menu__item " href="{{ route('curso.index') }} "><i class="app-menu__icon fas fa-people-carry"></i><span class="app-menu__label">cursos</span></a>
      
    </li>
     @endif
      @if (auth()->user()->hasRoles([1,2]))
  </li>
  <li class="treeview"><a class="app-menu__item" href="{{ route('docente.index') }}"><i class="app-menu__icon fas fa-truck-moving"></i><span class="app-menu__label">Calificar</span></a>
    
  </li>
   @endif

  @if (auth()->user()->hasRoles([1,3]))
  <li class="treeview"><a class="app-menu__item" href="{{ route('estudiante.index') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Cursos</span></a>
    
  </li>
    @endif

       @endguest

  </ul>
</aside>