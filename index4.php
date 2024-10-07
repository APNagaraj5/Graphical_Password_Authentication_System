<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>TM Technologies</title>
<meta name="viewport" content="width=device-width">

<style type="text/css">
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="myLoc.js"></script>
div#location, div#distance {
    padding: 5px;
    text-align:center;


}

div#subj2 {
    float: right;
    }

div#map {
    margin: 5px;
    width: 400px;
    height: 400px;
    border: 1px solid black;

    text-align:center;

}

div#tot {
    float:right;
    }
div#one {

    position: absolute;
    top:-10px;
    left:10%;
    width:80%;
    text-align: justify;
    line-height: 1.6em;
    font-family:Loto, Arial, Helvetica, sans-serif;
        }



body {font-family: Loto, Arial;
font-size: large;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #eee;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #f1f1f1;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</head>


<body>

<div id="one">


  <title>TM Technologies</title>

    <p style="text-align: center"><b><span style="font-family: "><span style="font-size: 56px"><span style="color: #CC0000">
    <img src=logo2.png alt="Slide 1" width="70" height="45">TM Technologies</span></span>  </span>
                              <a href="mailto:tmtshimoga@gmail.com"><img src=email1.png alt="email-logo" width="40" height="35"></a>
     </b>    </p>

<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'home')">Home</button>
  <button class="tablinks" onclick="openCity(event, 'service')">Service</button>
     <button class="tablinks" onclick="openCity(event, 'course')">Course</button>
  <button class="tablinks" onclick="openCity(event, 'syllabus')">Syllabus</button>
    <button class="tablinks" onclick="openCity(event, 'lab')">Lab</button>
      <button class="tablinks" onclick="openCity(event, 'alumni')">Alumni</button>
      <button class="tablinks" onclick="openCity(event, 'contact')">Contact</button>
       <button class="tablinks" onclick="openCity(event, 'Profile')">Profile</button>

</div>


<div id="home" class="tabcontent" style="display:block">

 <span style="font-size: x-large"><b><span style="color: #CC0000"> Founders Pen  </span></b></span>

<p style="text-align: justify"> Our centre focuses on  design and development of  quality software for the customers.
 Many software development centres are available, but  some are very good for the development as well as for learning.
  We are also focusing to  become one among them by providing necessary practical experience to the stakeholder.
</p>
  <span style="font-size: x-large"><b><span style="color: #CC0000"> Vision </span></b></span>


<p style="text-align: justify">To become one of the best software design and development centre. And also a preferred centre for 
learning industry demand skills while bridging the gap of industry and academia. 
</p>

 <span style="font-size: x-large"><b><span style="color: #CC0000"> Mission  </span></b></span>

<p>TM Technologies focuses on design and development of quality software
 for the customers. We try to achieve our goal by providing 
distinguished software services in the global markets by Innovation 
Technology. And also we try to illuminate the surroundings by sharing 
our knowledge and adopting an Integral approach towards work. 
 We are also focusing to become one among the reputed software designer 
and developer. The missions are as follows. </p>
<ul>
    
   <li> Deliver work to client's satisfaction</li>
<li>    Have a trustworthy and fair business </li>
    <li>Give the latest technology to the client </li>
    <li>Train the stakeholders by experts </li>
 <li>   Practice with high end live set-up lab </li>
   <li> Provide on par with industry level laboratory to train the clients </li>

</ul>

<span style="font-size: x-large"><b><span style="color: #CC0000"> Objectives  </span></b></span>
  
<p>In order to achieve our vision and mission, we are following these goals:</p>
    <li>To promote the development and export of software and software services including Information Technology (I.T.) Enabled Services</li>
   <li> To provide data communication services including value added services to IT / IT Enabled Services related industries.</li>
  <li>  To promote micro and small entrepreneurs by creating conducive 
environment for entrepreneurship in the field of IT / IT Enabled 
Services.</li>
    <li>Standardize and codify key software project concepts and terminology </li>
    <li>Ensure business goals and objectives are considered at all stages of a project </li>
    <li>Develop an accurate and flexible model describing key project activities </li>
    <li>Identify and leverage accurate insights into software project success and failure rates and reasons </li>
  <li>  Identify and encourage best practices which are appropriate for a particular project </li>
    <li>Develop software project </li>
    <li>Encourage a spirit of openness, transparency, integrity, trust, and continuous learning </li>
    <li>Build and nurture a global community that shares our vision and mission </li>
And our most important goal:
   <li> Bring out cost effective software projects </li>


<br>
 <span style="font-size: x-large"><b><span style="color: #CC0000"> No pre-requirement for enrolling the course:  </span></b></span>

Learning is a never ending process, provided one should have an urge to learn. 
</div>

<div id="course" class="tabcontent">
  <span style="font-size: x-large"><b><span style="color: #CC0000">Course  </span></b></span>


<p>
      Offered courses under TM Technologies are,
</p>
<ul>
    <li>Linux Fundamentals (One month duration)</li>

    <li>Linux Networking (One month duration)</li>

    <li>Linux Server Administration (One month duration)</li>

    <li>OpenStack Cloud Fundamentals and Administration (One month duration)</li>

   
</ul>

  <span style="font-size: x-large"><b><span style="color: #CC0000">Mode of Training  </span></b></span>

<p>It is a blend of Chalk and Talk and along with live demo.</p>
<b>Regular Class:</b> 20-25 Hours of on-line live instructor-led classes. (Monday to Friday)<br>
<b>Weekend Class :</b> 15-20 Hours of on-line live instructor-led classes. (Saturday and Sunday)<br>

<ul><li>The enrolled candidate will get a printed handout.</li> </ul>


</div>

<div id="service" class="tabcontent">
 <span style="font-size: x-large"><b><span style="color: #CC0000">Services  </span></b></span>

<p>
  Our main service is to design and develop software. 
</p>
<p><b>We undertake:</b></p>
<ul>
    <li> <b><span style="color: #CC0000">Software Development</span></b>
     projects using Web 2.0 technology.</li>
     <li> <b><span style="color: #CC0000">Computer / Computer Network Auditing</span></b>.</li>
     <li> <b><span style="color: #CC0000">Report generation using Latex</span></b>.</li>
    
    
    </ul>



<b><p>In addition to this we also render the  services like:</p></b>
<ul>
    <li><b><span style="color: #CC0000">Training</span></b> the students in the field of Linux Networking, Server
    Administration, Cloud Design and Development using  OpenStack platform.</li>
    <li><b><span style="color: #CC0000">Internship</span></b> on Linux System Administration and  OpenStack Cloud maintenance. </li>
  
    <li>We assist students  in developing study  <b><span style="color: #CC0000">Projects</span></b>. </li>
   

</ul>
</div>

<div id="lab" class="tabcontent">
 <span style="font-size: x-large"><b><span style="color: #CC0000">Lab Facility     </span></b></span>
<p>We established the lab keeping industry in the mind. Corporate style of facility provided to the user. The lab set-up includes: </p>

<ul>
<li>System configured with CUPS, FTP, DNS, DHCP, OpenStack Cloud and VM services</li> 
<li>Tower Desktop systems with a configuration of </li>
<ul>
<li>i5 processor </li>
<li>8GB RAM </li>
<li>500 GB HDD</li>

</ul>

<li>A 24 port Switch to connect your devices</li>
<li>CAT 6 cabled, LAN connection made with Start topology </li>
<li>Printer (Color) for taking printouts</li>

<li>Good speed Internet provided on need basis. </li>
</ul>


</div>


<div id="syllabus" class="tabcontent">
 <span style="font-size: x-large"><b><span style="color: #CC0000">Linux Fundamentals     </span></b></span>
<p>It is an entry level course. Anybody with a basic knowledge of operating computer can enrol to this course.</p>

 <ol>
<li>History about Linux </li>       
  <li>Accessing using Command line and GUI</li>     
<li> Shell, Commands and its Execution</li>     
<li>Linux File and Searching </li>     
<li>Getting Help in the System</li>     
<li>Editors in Linux Platform </li>     
<li>Re-directions and its Usage</li>     
<li>User Management</li>     
<li>Monitoring and Managing Process</li>     
<li> Service Controls</li>     
<li> Secure Shell and Copy</li>     
<li> Log files</li>     
<li> Network Configuration</li>     
<li> Host Name Configuration </li>     
<li>Archiving Files and Directory</li>     
<li>Installing Packages</li>     
<li> Mounting File Systems</li>     
<li>Link Creation</li>     
<li> Installation of OS</li>     
<li>  Changing Password</li>     
 <li>Internal Test </li>       
       </ol>
      
      <span style="font-size: x-large"><b><span style="color: #CC0000">Linux Networking     </span></b></span>
 


 <ol>
<li>Review of Linux Fundamentals </li>     
<li>Crimping and Testing</li>     
<li>IPv4 &amp; IPv6</li>     
<li>Creation of YUM Repository</li>     
<li>Usage of File Server (FTP) and Network File Server (NFS)
</li>     
<li>Usage of Web Server</li>     
<li>OS Installation through Network</li>     
<li>OSI and TCP / IP Architecture</li>     
<li>Control using Access Control Lists (ACLs)</li>     
<li>Manipulation of Disk</li>     
<li>Managing Logical Volume Management (LVM)</li>     
 <li>Basics of SELinux Security</li>     
<li>Scheduling Task</li>     
<li>System Run Levels</li>     
<li>Managing Firewall </li>     
<li>Domain Name Server (DNS)</li>     
<li>NIC Bonding / Teaming</li>     
<li>Booting Process</li>     
<li>Usage of Database</li>     
<li>Internal Test</li>     
    
      </ol>
      <span style="font-size: x-large"><b><span style="color: #CC0000">Linux Server Administration    </span></b></span>


 <ol> 
<li>Review of Linux Networking</li>     
<li>Configuration of kickstart and Installation</li>     
<li>Accessing Network Storage with NFS</li>     
<li>Accessing Network Storage with Samba (SMB)</li>     
<li>Configuring DNS Server</li>     
<li>Configuring YUM Server</li>     
<li>Host Configuration Protocol (DHCP) Server</li>     
<li>File Transfer Protocol (FTP) Server</li>     
<li>Network Time Protocol (NTP)</li>     
<li>Web service and Configuring Virtual Hosts </li>     
  <li>Small Computer System Interface (iSCSI)</li>     
<li>Configuring IPA Client and Server</li>     
<li>Secure Shell (SSH) Without Password Login</li>     
<li>Dual OS Installation</li>     
<li>Managing Virtual Machines with Virt-manager</li>     
 <li>Database Administration</li>     
<li>Scripting to Control the System</li>     
<li>Trouble Shooting</li>     
    <li>Internal Test</li> 
       </ol>

<span style="font-size: x-large"><b><span style="color: #CC0000">OpenStack Cloud Fundamentals and Administration   </span></b></span>

 <ol>
<li>Cloud Fundamentals</li>
<li>Cloud Architecture</li>
<li>Installation of host OS </li>
<li>Virtualization</li>
<li>Managing Guests Virtual Machines</li>
<li>Using OpenStack Dashboard</li>
<li>Using the python-novaclient Command Line Interfaces</li>
<li>Introduction to OpenStack Components</li>
<li>Installing OpenStack Compute: Nova, Keystone, Horizon</li>
<li>Deploying A Service</li>
<li>An introduction to SDN, deploying Networking with Neutron</li>
<li>Cloud Security with OpenStack,    Keystone Authentication Model</li>
<li>Monitoring and Metering</li>
<li>Internal Test</li> 




 </ol>

</div>
<div id="alumni" class="tabcontent">
In order to get the certificate the candidate should clear the practical
 examination conducted by the 
institute. The exam will be strictly conducted as per the standard. 
Following is the list of candidates successfully completed   
training from TM Technologies and certificate issued to recognize their 
efforts.

<style>
	.demo {
		border:1px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
	}
	.demo th {
		border:1px solid #C0C0C0;
		padding:5px;
		background:#F0F0F0;
	}
	.demo td {
		border:1px solid #C0C0C0;
		padding:5px;
	}
</style>
<table class="demo">
	<caption>Candidate successfully completed the course list</caption>
	<thead>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Course Completed</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td rowspan="3">  01</td>
		<td rowspan="3">Prashanth S</td>
		<td>Linux Fundamentals</td>
	</tr>
	<tr>
		
		
		<td>Linux Networking</td>
	</tr>
	<tr>
		
		
		<td>Linux Server Administration </td>
	</tr>
	<tr>
		<td>02</td>
		<td>Keerthi M Matti</td>
		<td>Internship</td>
	</tr>
	</tbody>
</table>

</div>
<div id="contact" class="tabcontent">


<div id="tot">
<div id="map"> </div>

</div>
<img src=qrcode.png alt="" width="10%" height="15%">
<div>


<span style="font-size: x-large"><b><span style="color: #CC0000">Postal Address </span></b></span><br>

<b> TM Technologies</b> <br>
 #27, 2<sup>nd</sup> Stage <br> 1<sup>st</sup> Cross, Vinobha Nagar <br>Behind Vikasa School <br> Shivamogga - 577 201 <br>
Karnataka,
INDIA<br>

<br>
<strong>Email:</strong>   tmtshimoga (at) gmail (dot) com            <br>
<strong>Web Site: </strong>       http://tmtechnologies.in    <br>
<strong>Contact (O):</strong>   +91 6364 210681<br>


</div>



</div>

   <div id="Profile" class="tabcontent">
 <?php

session_start();

ob_start();

?>










<?php

include("connect.php");

$name=$_SESSION['uname'];

$result=mysqli_query($con,"select username,name,clg,email,phone,userimage from user where username='$name'");

		if (mysqli_num_rows($result)>0)

		{

		$row=mysqli_fetch_array($result);

		$uname=$name;

		$rname=$row[1];

		$clgname=$row[2];

		$email=$row[3];

		$phone=$row[4];

		$userpic=$row[5];

		}









					echo '<b>Hi '.$name.' ! Find your credentials below :&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
                    &nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
                    &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
                    &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
                    &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;<a href="logout.php"><font color="black">Logout</font></a><hr color="#CC0000"> </b><br><br><br><table>

					<tr><td><img src="'.$userpic.'" border="10" height="250" width="200" bordercolor="red"></td></b>';

					echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username : '.$uname.'<br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name : '.$rname.'<br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : '.$email.'<br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College name : '.$clgname.'<br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone : '.$phone.'<br>

					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_sequence_check_password.php"><font color="black">Click here to Change Sequence of Images</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_password.php"><font color="black">Click here to Change Password</a>

					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<a href="change_profile_pic.php"><font color="black">Click here to Change Profile Picture</a></td></tr></table>';

?>




  </div>



</div></body></html>
