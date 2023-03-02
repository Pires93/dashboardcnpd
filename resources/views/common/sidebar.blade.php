<ul class="navbar-nav sidebar sidebar-dark accordion " >

    
    <div id="accordionSidebar">
        <!--  
          <a id="logotipo" class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
             
        </a>-->
        <a id="logotipo" class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon">
                <img class="img-profile " width="60" height="40"
                src="{{ asset('admin/img/logo.png') }}">
            </div>
            <div class="sidebar-brand-text mx-3">SGD <sup>V1.0</sup></div>
        </a>
        
       <hr class="sidebar-divider my-0"> 
        <br><br><br> 
        <hr class="sidebar-divider d-none d-md-block">
 
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard </span></a>
        </li>
            <?php  
            use App\Models\Sidebar; 
            //$menus = Sidebar::where(['estado'=>'Ativo'])->orderBy('titulo', 'ASC')->get();
            $menus = Sidebar::where(['estado'=>'Ativo','type'=>'Formulario'])->get();
            ?>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#formulario"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Formulários</span>
                </a>
                <div id="formulario" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded"> 
                    <?php
                    foreach ($menus as $menu) 
                    {
                    ?> 
                    <a class="collapse-item" href="{{ route("$menu->url") }}">
                    <i class="{{ $menu->icon }}"></i> {{ $menu->titulo }}
                    </a> 
                    <?php  
                    } 
                    ?>
                    </div>
                </div> 
            </li>
            <?php
            $menus = Sidebar::where(['estado'=>'Ativo','type'=>'Normal'])->get();
             foreach ($menus as $menu) 
                {
                ?> 
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route("$menu->url") }}">
                        <i class="{{ $menu->icon }}"></i>
                        <span>{{ $menu->titulo }}</span>
                    </a>
                </li> 
                <?php  
                } 
                ?> 
        
        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>
 

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-cog"></i>
                <span>Gestão de Site</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded"> 
            <?php
            $menus = Sidebar::where(['estado'=>'Ativo','type'=>'Gestao'])->orderBy('titulo', 'ASC')->get();
             foreach ($menus as $menu) 
                {
                ?> 
                 
                
                    <a class="collapse-item" href="{{ route("$menu->url") }}">
                    <i class="{{ $menu->icon }}"></i>
                        {{ $menu->titulo }}
                    </a>  
                <?php  
                } 
                ?> 
                </div>
            </div>
        </li> 
 
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        
    </div>

</ul>
<style> 

    #accordionSidebar{
        background-color: #061536; 
        z-index: 10000;  
        position: fixed;
        top: 0; 
        width: 100;
        overflow-y: scroll; 
        bottom: 0;
    }
#logotipo{
    position: fixed;  
    background:#061536; 
    z-index: 20; 
    width: 100;
    color: white; 
    /*background-image: url("{{ asset('admin/img/logodash.png') }}");
    background-repeat: no-repeat;
    background-size: 100% 100%;*/
    
}
#sidebarToggle{
     margin-left:45%
}
  
  
</style>
