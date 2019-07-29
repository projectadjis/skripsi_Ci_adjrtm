 <ul class="sidebar-menu" data-widget="tree" >
 	<li class="header">MAIN NAVIGATION</li>
 	<li class="<?php if($this->uri->segment(1)==""){echo "active";}?>">
 		<a href="<?php echo base_url(); ?>">
 			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
 		</a>
 	</li>
 	<li class="<?php if($this->uri->segment(1)=="user"){echo "active";}?>">
        <a href="<?php echo base_url('user'); ?>">
           <i class="fa fa-user"></i><span>User</span>
        </a>
  </li>
  <li class="<?php if($this->uri->segment(1)=="position"){echo "active";}?>">
        <a href="<?php echo base_url('position'); ?>">
           <i class="fa fa-deaf"></i><span>Position</span>
        </a>
  </li>
  <li class="treeview <?php if($this->uri->segment(1)=="weight_alternative"){echo "active";} elseif($this->uri->segment(1)=="weight_criteria"){echo "active";} ?>">
        <a href="#">
          <i class="fa fa-chain"></i>
          <span>Weight</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(1)=="weight_criteria"){echo "active";}?>"><a href="<?php echo base_url('weight_criteria') ?>"><i class="fa fa-circle-o"></i>Weight's Criteria</a></li>
          <li class="<?php if($this->uri->segment(1)=="weight_alternative"){echo "active";}?>"><a href="<?php echo base_url('weight_alternative') ?>"><i class="fa fa-circle-o"></i>Weight's Alternative</a></li>
        </ul>
    </li>
    <li class="<?php if($this->uri->segment(1)=="kpi"){echo "active";}?>">
      	<a href="<?php echo base_url('kpi'); ?>">
      		<i class="fa fa-bar-chart-o"></i><span>KPI</span>
      	</a>
  	</li>
  	<li class="<?php if($this->uri->segment(1)=="alternative"){echo "active";}?>">
      	<a href="<?php echo base_url('alternative'); ?>">
      		<i class="fa fa-snowflake-o"></i><span>Alternative</span>
      	</a>
    </li>
    <li class="<?php if($this->uri->segment(1)=="normalization"){echo "active";}?>">
        <a href="<?php echo base_url('normalization'); ?>">
        	<i class="fa fa-superpowers"></i><span>Normalization</span>
        </a>
    </li>
    <li class="<?php if($this->uri->segment(1)=="preference"){echo "active";}?>">
        <a href="<?php echo base_url('preference'); ?>">
        	<i class="fa fa-book"></i><span>Preference</span>
        </a>
    </li>
    <li class="<?php if($this->uri->segment(1)=="rank"){echo "active";}?>">
        <a href="<?php echo base_url('rank'); ?>">
        	<i class="fa fa-line-chart"></i><span>Rank</span>
        </a>
    </li>
 	<<!-- li class="<?php if($this->uri->segment(1)=="Employee"){echo "active";}?>">
 		<a href="<?php echo base_url('Employee'); ?>">
 			<i class="fa fa-user"></i> <span>Employee</span>
 		</a>
 	</li>

 	<li class="<?php if($this->uri->segment(2)=="Indonesia"){echo "active";}?>">
 		<a href="<?php echo base_url('Indonesia/Indonesia'); ?>">
 			<i class="fa fa-files-o"></i> <span>Indonesia</span>
 		</a>
 	</li> -->

 	<!-- <li class="treeview <?php if($this->uri->segment(2)=="Provinces"){echo "active";} elseif($this->uri->segment(2)=="Regencies"){echo "active";} elseif($this->uri->segment(2)=="Districts"){echo "active";} elseif($this->uri->segment(2)=="Villages"){echo "active";} elseif($this->uri->segment(2)=="Indonesia"){echo "active";} ?> ">
 		<a href="#">
 			<i class="fa fa-files-o"></i>
 			<span>Indonesia</span>
 			<span class="pull-right-container">
 				<i class="fa fa-angle-left pull-right"></i>
 			</span>
 		</a>
 		<ul class="treeview-menu">
 			<li class="<?php if($this->uri->segment(2)=="Provinces"){echo "active";}?>"><a href="<?php echo base_url('Indonesia/Provinces'); ?>"><i class="fa fa-circle-o"></i> Provinces</a></li>
 			<li class="<?php if($this->uri->segment(2)=="Regencies"){echo "active";}?>"><a href="<?php echo base_url('Indonesia/Regencies'); ?>"><i class="fa fa-circle-o"></i> Regencies</a></li>
 			<li class="<?php if($this->uri->segment(2)=="Districts"){echo "active";}?>"><a href="<?php echo base_url('Indonesia/Districts'); ?>"><i class="fa fa-circle-o"></i> Districts</a></li>
 			<li class="<?php if($this->uri->segment(2)=="Villages"){echo "active";}?>"><a href="<?php echo base_url('Indonesia/Villages'); ?>"><i class="fa fa-circle-o"></i> Villages</a></li>

 			<li class="<?php if($this->uri->segment(2)=="Indonesia"){echo "active";}?>"><a href="<?php echo base_url('Indonesia/Indonesia'); ?>"><i class="fa fa-circle-o"></i> Indonesia</a></li>
 		</ul>
 	</li>  -->
 	
 	<!-- <li class="<?php if($this->uri->segment(2)=="Kodepos"){echo "active";}?>">
 		<a href="<?php echo base_url('Indonesia/Kodepos'); ?>">
 			<i class="fa fa-envelope-o"></i> <span>Kode Pos</span>
 		</a>
 	</li> -->
 </ul>