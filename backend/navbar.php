<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Logout</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		<li><img src="../<?php if(empty($srow['photo'])){echo "upload/profile.jpg";}else{echo $srow['photo'];} ?>" style="height:40px; width:40px; position:relative; top:6px; left:10px;"></li>
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Change Profile Picture</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul>
    </div>
</nav>