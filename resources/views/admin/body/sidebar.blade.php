 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="/admin/dashboard">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="/admin/dashboard" alt="">
						  <h3><b>Admin</b>Panel</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="/admin/dashboard">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Blog Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('blog-add')}}"><i class="ti-more"></i>Create</a></li>
            <li><a href="{{ route('blog-manage')}}"><i class="ti-more"></i>All Blog</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Project request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all-message')}}"><i class="ti-more"></i>All Request</a></li>
            
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Main Banner</a></li>
            <li><a href="{{ route('add-content')}}"><i class="ti-more"></i>Add Services</a></li>
            <li><a href="{{ route('manage-content')}}"><i class="ti-more"></i>Manage Services</a></li>
            <li><a href="{{ route('add-gallery')}}"><i class="ti-more"></i>Gallery</a></li>
            <li><a href="{{ route('add-portfolio')}}"><i class="ti-more"></i>Portfolio</a></li>
            <li><a href="{{ route('add-client')}}"><i class="ti-more"></i>Client</a></li>
            <li><a href="{{ route('add-ind')}}"><i class="ti-more"></i>Industries</a></li>
            
          </ul>
        </li> 
		
		<li class="treeview">
          <a href="">
            <i data-feather="server"></i>
			<span>All Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category')}}"><i class="ti-more"></i>Main Category</a></li>
            <li><a href="{{ route('all.subcategory')}}"><i class="ti-more"></i>Sub Category</a></li>
            <li><a href="{{ route('all.childcategory')}}"><i class="ti-more"></i>Child Category</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Company profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('policy-add')}}"><i class="ti-more"></i>Add Policy</a></li>
            <li><a href="{{ route('policy-manage')}}"><i class="ti-more"></i>Manage Policy</a></li>
            <li><a href="{{ route('terms-add')}}"><i class="ti-more"></i>Add Terms</a></li>
            <li><a href="{{ route('terms-manage')}}"><i class="ti-more"></i>Manage Terms</a></li>
            <li><a href="#"><i class="ti-more"></i>All Blog</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Basic Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('setting-add') }}"><i class="ti-more"></i>Setting</a></li>
            <li><a href="{{ route('setting-fav') }}"><i class="ti-more"></i>Favicon Update</a></li>
            <li><a href="{{ route('setting-seo') }}"><i class="ti-more"></i>Seo setting</a></li>
            
          </ul>
          
        </li> 
		 

				  		  
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
    
		  
		<li>
          <a href="{{ route('admin.logout') }}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
	
	</div>
  </aside>