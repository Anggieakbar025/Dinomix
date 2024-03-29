<div class="block-header">
	<h2>DASHBOARD</h2>
</div>

<!-- Widgets -->
<div class="row clearfix">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-pink hover-expand-effect">
			<div class="icon">
				<i class="material-icons">playlist_add_check</i>
			</div>
			<div class="content">
				<div class="text">NEW TASKS</div>
				<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-cyan hover-expand-effect">
			<div class="icon">
				<i class="material-icons">help</i>
			</div>
			<div class="content">
				<div class="text">NEW TICKETS</div>
				<div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-light-green hover-expand-effect">
			<div class="icon">
				<i class="material-icons">forum</i>
			</div>
			<div class="content">
				<div class="text">NEW COMMENTS</div>
				<div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-orange hover-expand-effect">
			<div class="icon">
				<i class="material-icons">person_add</i>
			</div>
			<div class="content">
				<div class="text">NEW VISITORS</div>
				<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #END# Widgets -->
<!-- CPU Usage -->
<div class="row clearfix">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="header">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-6">
						<h2>CPU USAGE (%)</h2>
					</div>
					<div class="col-xs-12 col-sm-6 align-right">
						<div class="switch panel-switch-btn">
							<span class="m-r-10 font-12">REAL TIME</span>
							<label>OFF<input type="checkbox" id="realtime" checked><span
									class="lever switch-col-cyan"></span>ON</label>
						</div>
					</div>
				</div>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
							aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">more_vert</i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div id="real_time_chart" class="dashboard-flot-chart"></div>
			</div>
		</div>
	</div>
</div>
<!-- #END# CPU Usage -->
<div class="row clearfix">
	<!-- Visitors -->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card">
			<div class="body bg-pink">
                <div class="font-bold m-b--35">PENGGUNA</div>
				<ul class="dashboard-stat-list">
					<li>
						TODAY
						<span class="pull-right"><b>1 200</b> <small>USERS</small></span>
					</li>
					<li>
						YESTERDAY
						<span class="pull-right"><b>3 872</b> <small>USERS</small></span>
					</li>
					<li>
						LAST WEEK
						<span class="pull-right"><b>26 582</b> <small>USERS</small></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #END# Visitors -->
	<!-- Answered Tickets -->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card">
			<div class="body bg-teal">
				<div class="font-bold m-b--35">PENJUALAN</div>
				<ul class="dashboard-stat-list">
					<li>
						TODAY
						<span class="pull-right"><b>12</b> <small>TICKETS</small></span>
					</li>
					<li>
						YESTERDAY
						<span class="pull-right"><b>15</b> <small>TICKETS</small></span>
					</li>
					<li>
						LAST WEEK
						<span class="pull-right"><b>90</b> <small>TICKETS</small></span>
					</li>
					<li>
						LAST MONTH
						<span class="pull-right"><b>342</b> <small>TICKETS</small></span>
					</li>
					<li>
						LAST YEAR
						<span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
					</li>
					<li>
						ALL
						<span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #END# Answered Tickets -->
</div>
