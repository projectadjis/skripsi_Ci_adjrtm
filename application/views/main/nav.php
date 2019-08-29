 <ul class="sidebar-menu" data-widget="tree" >
 	<li class="header">MAIN NAVIGATION</li>
 	<li class="<?php if($this->uri->segment(1)==""){echo "active";}?>">
 		<a href="<?php echo base_url(); ?>">
 			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
 		</a>
 	</li>
 	
  <li class="treeview <?php if($this->uri->segment(1)=="user"){echo "active";} elseif($this->uri->segment(1)=="managementuser"){echo "active";} elseif($this->uri->segment(1)=="kpi"){echo "active";} ?>">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(1)=="user"){echo "active";} elseif($this->uri->segment(1)=="kpi"){echo "active";} ?>"><a href="<?php echo base_url('user') ?>"><i class="fa fa-circle-o"></i>All User</a></li>
          <li class="<?php if($this->uri->segment(1)=="managementuser"){echo "active";}?>"><a href="<?php echo base_url('managementuser') ?>"><i class="fa fa-circle-o"></i>Management User</a></li>
        </ul>
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
  <li class="<?php if($this->uri->segment(2)=="hasil_kpi"){echo "active";}?>">
    	<a href="<?php echo base_url('kpi/hasil_kpi'); ?>">
    		<i class="fa fa-bar-chart-o"></i><span>Hasil KPI</span>
    	</a>
	</li>
  <li class="treeview <?php if($this->uri->segment(1)=="generate_alternative"){echo "active";} elseif($this->uri->segment(1)=="generate_normalization"){echo "active";} elseif($this->uri->segment(1)=="generate_preference"){echo "active";} ?>">
      <a href="#">
        <i class="fa fa-bolt"></i>
        <span>Generate</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php if($this->uri->segment(1)=="generate_alternative"){echo "active";}?>"><a href="<?php echo base_url('generate_alternative') ?>"><i class="fa fa-circle-o"></i>Generate's Alternative</a></li>
        <li class="<?php if($this->uri->segment(1)=="generate_normalization"){echo "active";}?>"><a href="<?php echo base_url('generate_normalization') ?>"><i class="fa fa-circle-o"></i>Generate's Normalization</a></li>
        <li class="<?php if($this->uri->segment(1)=="generate_preference"){echo "active";}?>"><a href="<?php echo base_url('generate_preference') ?>"><i class="fa fa-circle-o"></i>Generate's Preference</a></li>
      </ul>
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
  <li class="<?php if($this->uri->segment(1)=="report"){echo "active";}?>">
      <a href="<?php echo base_url('report'); ?>">
        <i class="fa fa-book"></i><span>Report</span>
      </a>
  </li>
    <!-- <li class="<?php if($this->uri->segment(1)=="rank"){echo "active";}?>">
        <a href="<?php echo base_url('rank'); ?>">
        	<i class="fa fa-line-chart"></i><span>Rank</span>
        </a>
    </li> -->
 </ul>