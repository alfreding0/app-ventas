<ul id="sidenav-left" class="sidenav teal">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src="https://images.pexels.com/photos/450038/pexels-photo-450038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" 
                alt=""
                class="responsive-img">
            </div>

            <div class="row">

                <div class="col s9 push-s3 center-align">
                    <a href="#user" class="centrado"><img class="circle responsive-img" src="{{ asset('imgs/perfil.png') }}"></a>
                </div>
            </div>
            <a href="#name"><span class="black-text name">{{ auth()->user()->personal->nombres.' '.auth()->user()->personal->apellidos }}</span></a>
            <a href="#email"><span class="black-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader yellow-text">Administración</a></li>
    <li><a class="waves-effect white-text" href="{{ route('personal.index') }}">Gestionar Personas<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect pink-text" href="{{ route('producto.index') }}">Gestionar Productos<i class="material-icons">class</i></a></li>
    {{-- <li><a class="waves-effect" href="{{ route('tipo_personal.index') }}">Gestionar TIPOpersonal<i class="material-icons">class</i></a></li> --}}
</ul>
