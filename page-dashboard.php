<?php 
/*
*Template Name: Dashboard
*/
get_header()?>

<div class="container">
	<aside>
		<!-- starts top -->
		<div class="top">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/logo-default.png" alt="">
				<h2>DASH <span class="danger">BOARD</span></h2>
			</div>
			<div class="close" id="close-btn">
				<span class="material-icons-sharp">close</span>
			</div>
		</div>
		<!-- ends top  -->
			<!-- starts sidebar -->
			<div class="sidebar">
				<a href="#">
					<span class="material-icons-sharp">grid_view</span>
					<h3>Dashboard</h3>
				</a>
				<a href="#" class="active">
					<span class="material-icons-sharp">person_outline</span>
					<h3>Customers</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">receipt_long</span>
					<h3>Orders</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">insights</span>
					<h3>Analytics</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">mail_outline </span>
					<h3>Messagens</h3>
					<span class="message-count">30</span>
				</a>
				<a href="#">
					<span class="material-icons-sharp">inventory</span>
					<h3>Products</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">report_gmailerrorred</span>
					<h3>Reports</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">settings</span>
					<h3>Setting</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">add</span>
					<h3>Add Product</h3>
				</a>
				<a href="#">
					<span class="material-icons-sharp">logout</span>
					<h3>Logout</h3>
				</a>
			</div>
			<!-- ends sidebar -->
		</aside>
		<main>
			<h1>Dashboard</h1>
			<div class="date">
				<input type="date">
			</div>
			<div class="insights">
				<!-- starts sales -->
				<div class="sales">
					<span class="material-icons-sharp">analytics</span>
					<div class="middle">
						<div class="left">
							<h3>Total Sales</h3>
							<h1>R$25,90</h1>
						</div>
						<div class="progress">
							<svg><circle cx='38' cy='38' r='36'></circle></svg>
							<div class="number"><p>81%</p></div>
						</div>
					</div>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<!-- ends sales -->
				<!-- starts expenses -->
				<div class="expenses">
					<span class="material-icons-sharp">bar_chart</span>
					<div class="middle">
						<div class="left">
							<h3>Total Expenses</h3>
							<h1>R$14,00</h1>
						</div>
						<div class="progress">
							<svg><circle cx='38' cy='38' r='36'></circle></svg>
							<div class="number"><p>62%</p></div>
						</div>
					</div>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<!-- ends expenses -->
					<!-- starts income -->
				<div class="income">
					<span class="material-icons-sharp">stacked_line_chart</span>
					<div class="middle">
						<div class="left">
							<h3>Total Income</h3>
							<h1>R$20,90</h1>
						</div>
						<div class="progress">
							<svg><circle cx='38' cy='38' r='36'></circle></svg>
							<div class="number"><p>44%</p></div>
						</div>
					</div>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<!-- ends income -->
			</div>
			<!-- starts recenter order -->
			<div class="recent-orders">
				<h2>Recent Orders</h2>
				<table>
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Product Number</th>
							<th>Payment</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
						<tr>
							<td>Foldable Mini Drone</td>
							<td>85631</td>
							<td>Doe</td>
							<td class="warning">Pending</td>
							<td class="primary">Details</td>
						</tr>
					</tbody>
				</table>
				<a href="#">Show All</a>
			</div>
			<!-- ends recenter order -->
		</main>
		<!-- ends main -->
		<div class="right">
			<!-- starts top  -->
			<div class="top">
				<button id="menu-btn">
					<div class="material-icons-sharp">menu</div>
				</button>
				<div class="theme-toggle">
					<span class="material-icons-sharp active">light_mode</span>
					<span class="material-icons-sharp">dark_mode</span>
				</div>
				<div class="profile">
					<div class="info">
						<p>Hello, <b>Wellington </b></p>
						<small class="text-muted">Admin</small>
					</div>
					<div class="profile-photo">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/profile-default.png" alt="">
					</div>
				</div>
			</div>
			<!-- ends top -->
			<!-- starts recent updates  -->
			<div class="recent-updates">
				<h2>Recent Updates</h2>
				<div class="updates">
					<?php for($i=0; $i<3; $i++){?>
						<div class="update">
							<div class="profile-photo">
								<img src="<?php echo get_template_directory_uri()?>/assets/img/profile-default.png" alt="">
							</div>
							<div class="message">
								<p><b>Wellington Cardoso</b> established fact that a reader</p>
								<small class="text-muted">2 Minutes Ago</small>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- sends recent updates  -->
			<!-- starts sales analytics -->
			<div class="sales-analytics">
				<h2>Sales Analytics</h2>
				<div class="item online">
					<div class="icon">
						<span class="material-icons-sharp">shopping_cart</span>
					</div>
					<div class="right">
						<div class="info">
							<h3>ONLINE ORDERS</h3>
							<small class="text-muted">Last 24 Hours</small>
						</div>
						<h5 class="success">+39%</h5>
						<h3>3849</h3>
					</div>
				</div>
				<div class="item offline">
					<div class="icon">
						<span class="material-icons-sharp">local_mall</span>
					</div>
					<div class="right">
						<div class="info">
							<h3>OFFLINE ORDERS</h3>
							<small class="text-muted">Last 24 Hours</small>
						</div>
						<h5 class="danger">-17%</h5>
						<h3>1100</h3>
					</div>
				</div>
				<div class="item customers">
					<div class="icon">
						<span class="material-icons-sharp">person</span>
					</div>
					<div class="right">
						<div class="info">
							<h3>NEW CUSTOMERS</h3>
							<small class="text-muted">Last 24 Hours</small>
						</div>
						<h5 class="success">+25%</h5>
						<h3>849</h3>
					</div>
				</div>
				<div class="item add-product">
					<div>
						<span class="material-icons-sharp">add</span>
						<h3>Add Product</h3>
					</div>
				</div>
			</div>
			<!-- ends sales analytics -->
		</div>
	</div>