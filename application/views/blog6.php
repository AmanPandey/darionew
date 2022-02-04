
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #f05826;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>

<div class="header mt-5" style="background-image: url('assets/img/blog_header.png');">
  &nbsp;
</div>
   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><strong>Rajiv Awas Yojana</strong> </h2>
      <h6>Posted, Jan 13, 2022</h6>
      <div class="fakeimg">
      <img src="assets/img/blog6.png" width="100%"/>
     </div>
      <p style="text-align: justify;">To accelerate the efforts to achieve Universal Sanitation Coverage and to put the focus on sanitation, 
          the Hon’ble Prime Minister of India had launched the Swachh Bharat Mission on 2nd October 2014. Under 
          the mission, all villages, Gram Panchayats, Districts, States and Union Territories in India declared 
          themselves “open-defecation free” (ODF) by 2 October 2019, the 150th birth anniversary of Mahatma Gandhi, 
          by constructing over 100 million toilets in rural India.
        <br/>
        <br/>
        The Swachh Bharat Mission – Gramin (SBM-G) programme, under the Ministry of Drinking Water and Sanitation, is a flagship programme of the Government of India. The e-Governance application used for its monitoring has been developed in-house by NIC under the guidance of the SBM-G programme division. It is an integrated portal having various web-based modules, Mobile Apps and multiple GIS-based dashboards for close and effective monitoring of the progress of implementation at various levels, viz. the PMO, all states and districts across the country and at the Ministry itself.

        <br/>
        <br/>
The eGovernance Solutions including Mobile Apps, developed by NIC, for Swachh Bharat Mission-Gramin (SBM-G) help the Ministry of Drinking Water & Sanitation track the progress of cleanliness campaigns in different states. SBM-G is built upon hybrid deployment, made with the combination of High Availability Solution and Disaster Recovery Solution for SQL Server at a database level.

        <br/>
        <br/>
The software deployment has been done on Microsoft Virtual Machines (VMs) on MeghRaj Cloud Infrastructure with SQL Server 2016 as the backend database with a High Availability (HA) and Disaster Recovery (DR) solution.

        <br/>
        <br/>
HA and DR strategies strive to address non-functional requirements such as performance, system availability, fault tolerance, data retention, business continuity and user experience. It is imperative that selection of an appropriate HA and DR strategy is driven by business requirements. For HA, all service level agreements expected of the system have to be considered. For defining DR requirements, measurable characteristics such as Recovery Time Objective (RTO) and Recovery Point Objective (RPO) have to be considered.
        <br/>
        <br/>
Hybrid deployment by combining the High Availability Solution with Disaster Recovery Solution for SQL Server at a database level with AlwaysOn Availability Groups has been used as HADR Solution for Swachh Bharat Mission-Gramin.
        
        
        </p>

          
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
        &nbsp;
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Popular Post</h3>
      <a href="<?php echo base_url('Swachh-Bharat-Mission') ?>"><div class="fakeimg text-white">Swachh Bharat Mission</div></a><br>
      <a href="<?php echo base_url('Smart-Cities') ?>"><div class="fakeimg text-white">Smart Cities</div></a><br>
      <a href="<?php echo base_url('Atal-Mission-for-Rejuvenation-and-Urban-Transformation') ?>"><div class="fakeimg text-white">Atal Mission for Rejuvenation and Urban Transformation </div></a><br>
      <a href="<?php echo base_url('Scheme-for-Satellite-Towns-around-seven-megacities') ?>"><div class="fakeimg text-white">Scheme for Satellite Towns around seven megacities</div></a><br>
      <a href="<?php echo base_url('Pradhan-Mantri-Awas-Yojana') ?>"><div class="fakeimg text-white">Pradhan Mantri Awas Yojana</div></a><br>
      <a href="<?php echo base_url('Deendayal-Antyodaya-Yojana-National-Urban-Livelihoods-Mission') ?>"><div class="fakeimg text-white">Deendayal Antyodaya Yojana National Urban Livelihoods Mission</div></a><br>
      <a href="<?php echo base_url('Rajiv-Awas-Yojana') ?>"><div class="fakeimg text-white">Rajiv Awas Yojana</div></a><br>
    </div>
  </div>
</div>

