	<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/admin/dashboard">
					<span class="align-middle">Glints</span>
				</a>

				<ul class="sidebar-nav">	
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item @if(request()->route()->getName() == 'admin_dashboard') active @endif">
						<a class="sidebar-link" href="/admin/dashboard">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_profile') active @endif">
						<a class="sidebar-link" href="/admin/profile">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>


					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_user') active @endif">
						<a class="sidebar-link" href="/admin/users">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
						</a>
					</li>

					<li class="sidebar-item  @if(request()->route()->getName() == 'admin_company') active @endif">
						<a class="sidebar-link" href="/admin/companies">
							<i class="align-middle" data-feather="box"></i> <span class="align-middle">Companies</span>
						</a>
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_expert_user') active @endif">
						<a class="sidebar-link" href="/admin/expert-user">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Expert Users</span>
						</a>
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_expert_class') active @endif">
						<a class="sidebar-link" href="/admin/expert-class">
              <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Expert Classes</span>
            </a>
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_blog') active @endif">
						<a class="sidebar-link" href="/admin/blog">
							<i class="align-middle" data-feather="check-square"></i> <span
								class="align-middle">Blog</span>
						</a>
					</li>

					<li class="sidebar-item @if(request()->route()->getName() == 'admin_consultation' || request()->route()->getName() == 'admin_consultation_detail') active @endif">
						<a class="sidebar-link" href="/admin/consultation">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Consultation</span>
            </a>
					</li>

					

			</div>
		</nav>