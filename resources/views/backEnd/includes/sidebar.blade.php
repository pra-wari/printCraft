<div style="position: absolute;margin: 21px 0px 0px 1110px;">
    <form method="POST" action="{{ url('logout') }}">
        @csrf

        <x-dropdown-link :href="url('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="menu-icon fa fa-power-off"></i>
            {{ __('Log out') }}
        </x-dropdown-link>
    </form>
</div>
 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="left-menu-item active">
                        <a href="/super-admin" id="" title="dashboard"><i class="menu-icon fa fa-tachometer"></i>Dashboard </a>
                    </li>
                  
                    <li class="left-menu-item" data-right-panel="services">
                        <a href="#" id="" title="Add products to sell"><i class="menu-icon fa fa-wrench"></i>Services</a>
                    </li>

                    <li class="left-menu-item" data-right-panel="products">
                        <a href="#" title="Added products to sell"><i class="menu-icon  fa fa-product-hunt"></i>Products</a>
                    </li>
                  
                    <li class="left-menu-item" data-right-panel="pricing_tables">
                        <a href="#" title="Cart"><i class="menu-icon fa fa-money"></i></i>Pricing table</a>
                    </li>

                    <li class="left-menu-item" data-right-panel="testimonials">
                        <a href="#" title="Orders"><i class="menu-icon fa fa-comments-o"></i>Testimonials</a>
                    </li>

                    <li class="left-menu-item" data-right-panel="bookings">
                        <a href="#" title="Orders"><i class="menu-icon fa fa-handshake-o"></i>Bookings</a>
                    </li>

                    <li class="left-menu-item" data-right-panel="clients">
                        <a href="#" title="Orders"><i class="menu-icon fa fa-bell"></i>Clients</a>
                    </li>

                    <!-- <li class="left-menu-item">
                        <a href="/logout" onclick="event.preventDefault(); document.getElementById('frm-logout').submit()" title="Logout"><i class="menu-icon fa fa-power-off"></i>Logout</a>
                    </li> -->
                  
                   
               
                   
                    
                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">