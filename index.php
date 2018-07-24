<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>DevOps/Linux Sys Admin | Joseph Redinger</title>
</head>

<body>
  <div class="container">
    <header id="main-header">
      <div class="row">
        <div class="col-lg-4 col-md-5">
          <img src="img/joe.jpg" alt="Profile Photo">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white">
              <div class="name d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Joseph Redinger</h1>
              </div>
            </div>
            <div class="p-4 bg-black">
              Experienced DevOps Engineer <br>
              Linux Systems Admininistrator <br>
              Full-stack Developer <br>
              Expertise in Web Development support <br>
              Multilingual with international experience
            </div>
          </div>

          <div>
            <div class="d-flex flex-row text-white align-items-stretch text-center">
              <div class="port-item p-4 skills" data-toggle="collapse" data-target="#home">
                <i class="fa fa-home d-block"></i>Skills
              </div>
              <div class="port-item p-4 education" data-toggle="collapse" data-target="#education">
                <i class="fa fa-graduation-cap d-block"></i>Education
              </div>
              <div class="port-item p-4 work" data-toggle="collapse" data-target="#work">
                <i class="fa fa-folder-open d-block"></i>Work
              </div>
              <div class="port-item p-4 contact" data-toggle="collapse" data-target="#contact">
                <i class="fa fa-envelope d-block"></i>Contact
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->

    <div id="home" class="collapse show">
      <div class="card card-body skills text-white py-5">
        <h2>My Skills</h2>
      </div>
      <a href="img/site.gif" target="_blank" class="btn btn-outline-dark"><i class="fa fa-file-text"></i> See How This Site Works!</a>

      <?php
      require_once('./dbconnect.php');
      $category_sql="select distinct category from resume order by priority";
      $category_result=mysqli_query($connection,$category_sql);
      while($category_row = $category_result->fetch_assoc()) {
        $cat = $category_row["category"];
        echo '<div class="card card-body skills my-5 py-5">
        <h3>'. $cat . '</h3>
        <hr>';

        echo '<div class="card card-body">';


        $sql = "select category,skill,ability from resume where category like '$cat'";
        $result=mysqli_query($connection,$sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {


            echo '<h4>' . $row["skill"] . '</h4>';
            echo '<div class="progress mb-3">
            <div class="progress-bar skills" style="width:' . $row["ability"] . '%"></div>
            </div>';
          }
        }
        echo '</div>';
        echo '</div>';
      }
      $connection->close();
      ?>

    </div>

    <!-- Education  -->
    <div id="education" class="collapse">
      <div class="card card-body education text-white py-5">
        <h2>My Education</h2>
      </div>
      <div class="card card-body education py-5 my-5">
        <h3>University Studies</h3>
        <div class="card-deck">
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title">M.S. Computer Science Program* </h4>
              <h5 class="card-title">Hofstra University, Hempstead NY</h5>
              <p class="card-text">Recipient Hofstra Computer Department Scholarship 1993 & 1994</p>
              <p class="card-text">*all but thesis</p>
              <p class="p2 mb-3 bg-dark text-white">
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1993-1994
              </h6>
            </div>
          </div>
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title">B.A., Linguistics/Italian</h4>
              <h5 class="card-title">State University of New York at Stony Brook</h5>
              <p class="card-text">Phi Beta Kappa Academic Honor Society</p>
              <p class="card-text">Magna Cum Laude</p>
              <p class="p2 mb-3 bg-dark text-white">
              </p>
              <p class="p2 mb-3 bg-dark text-white">
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1986
              </h6>
            </div>
          </div>
          <div class="card my-1">
            <div class="card-body">
              <h4 class="card-title">Università degli Studi di Roma</h4>
              <h4 class="card-title">"La Sapienza"</h4>
              <h5 class="card-title">Rome, Italy</h5>
              <p class="card-text"></p>
              <p class="p2 mb-3 bg-dark text-white">
              </p>
              <p class="p2 mb-3 bg-dark text-white">
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1986-1987
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-body education py-5 my-5">
        <h3>Professional Development</h3>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Udemy.com Online Courses in DevOps and Web Development</li>
                <li class="list-group-item">ITIL Foundations Certification</li>
                <li class="list-group-item">FAST ESP Search Systems Administration</li>
                <li class="list-group-item">Sun Systems Administration I & II</li>
                <li class="list-group-item">Sun TCP/IP Networking</li>
                <li class="list-group-item">Sun Performance Tuning</li>
                <li class="list-group-item">Oracle PL/SQL</li>
                <li class="list-group-item">Oracle Database Administration I & II</li>
                <li class="list-group-item">Cisco Router Basics</li>
                <li class="list-group-item">Project Management</li>
                <li class="list-group-item">Supervision Skills</li>
                <li class="list-group-item">Dealing with Difficult Employees</li>
                <li class="list-group-item">SEI/CMM</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  WORK  -->
    <div id="work" class="collapse">
      <div class="card card-body work text-white py-5">
        <h2>My Work</h2>
      </div>

      <div class="card card-body work py-5 my-5">
        <h3>Tampa Bay Times</h3>
        <p class="lead">St. Petersburg, FL</p>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">DevOps Engineer II</h4>
              <h4 class="card-title">Linux Systems Administrator</h4>
              <h4 class="card-title">Release Coordinator</h4>
              <p class="card-text">Coordinating and deploying applications through the entire software development lifecycle (Development, QA, Staging, Production).  Designed and implemented systems to build software applications.  Created technical documents with instructions for deploying applications.  Planned and coordinated testing of applications in QA.  Provided technical support and direction to developers.</p>
              <ul>
                <li>Provided documentation and training to assist in the outsourcing of IT department.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2015-2016
              </h6>
            </div>
          </div>
        </div>
      </div>


      <div class="card card-body work py-5 my-5">
        <h3>Net Prophets LLC</h3>
        <p class="lead">St. Petersburg, FL and Babylon, NY</p>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sole Proprietor Consulting for The Tampa Bay Times & Politifact</h4>
              <p class="card-text">Providing development and operations support for the Tampa Bay Times and Politifact.  Working to increase the newspaper’s online presence and convert from an in-house data center to a virtual off-site environment.  Assisting in the conversion of applications from using proprietary license-based software to free open-source equivalents (Apache, Solr, etc.).</p>
              <ul>
                <li>Virtualized most on-premises systems to AWS, decreasing the office space and HVAC requirements for the company.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2014-2015
              </h6>
            </div>
          </div>
        </div>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sole Proprietor Consulting for Wolters Kluwer Publishing Company</h4>
              <p class="card-text">Supported development and operations staff at Wolters Kluwer, an international publishing company. Worked with development staff to build multilingual web-based applications for tax, accounting and legal online research. Provided system design, build out and performance analysis for Red Hat Linux and Windows systems. Assisted in installation and configuration of search engine software (Apache Solr and Fast ESP), web/application server software (Apache, Tomcat, JBoss, WebLogic, Java) and database servers (MS SQL Server). Built out servers for Business Technologies team using Big Data applications such as Hadoop and FUSE ESB. Managed virtual machines running on VMWare ESX servers.</p>
              <ul>
                <li>Successfully migrated development servers from physical hardware located in remote data centers to virtual machines.</li>
                <li>Assisted in the automation of software deployments across development servers using Jenkins and Ant.</li>
                <li>Aided in the initial set up of the satellite office location in Babylon, NY including telephone and internet connectivity.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2014-2015
              </h6>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-body work py-5 my-5">
        <h3>Reuters</h3>
        <p class="lead">Hauppauge, NY & Stamford, CT</p>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Senior Product/Systems Engineer</h4>
              <p class="card-text">Supported staff of 10 individuals in financial software development group including 30 development/test servers and 25 developer workstations. Responsible for maintenance, second-level support and release management of 9 production servers. Installed and troubleshooted all necessary hardware and software on both development and production systems including Solaris, iPlanet, Java, Weblogic.</p>
              <ul>
                <li>Engineered and project managed the transfer of Reuters Plus development systems to St. Louis, MO from Hauppauge, NY.</li>
                <li>Successfully engineered transition of production systems from out-of-state divisional data centers.</li>
                <li>Reduced support contract expenses by providing in-house hardware support for Sun upgrades and basic repairs.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2015-2016
              </h6>
            </div>
          </div>
        </div>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Implementation Specialist</h4>
              <p class="card-text">Implemented and supported system monitoring tools for Fixed Income group. Documented entire project lifecycle for implementation and development groups including Project Plans, Requirements Specifications, Functional Specifications, Test Plans, Release Notes, Operations Manuals and Training Materials. Provided support for Unix, Windows and VMS systems.</p>
              <ul>
                <li>Improved operational efficiency by designing and installing Tivoli management framework for system monitoring.</li>
                <li>Designed, built and maintained "jumpstart" server for automated installation of Solaris operating system.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2000
              </h6>
            </div>
          </div>
        </div>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Implementation Support Engineer</h4>
              <p class="card-text">Documented policies and procedures of Fixed Income group to conform to SEI/CMM standards. Analyzed hardware and software requirements for capacity management planning. Reviewed Technical Policies to ensure that Fixed Income systems adhered to corporate guidelines. Purchased, installed and maintained Sun Microsystems hardware and software.</p>
              <ul>
                <li>Achieved SEI/CMM Level 2 status by representing Fixed Income group during assessment.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2000
              </h6>
            </div>
          </div>
        </div>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Unix Systems Administrator</h4>
              <p class="card-text">Managed Unix and Windows systems for Fixed Income group. Performed backups of Unix, VMS and Windows systems. Updated and validated Release Notes, Installation & Maintenance Guides and Operations Manuals. Performed basic VMS duties (monitoring backups, file transfers, etc.). Trained operations and development staff on procedural changes to systems.</p>
              <ul>
                <li>Led testing and support of Fixed Income group Unix systems during Y2K cutover.</li>
              </ul>

            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1997-2000
              </h6>
            </div>
          </div>
        </div>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Dealing Coordinator</h4>
              <p class="card-text">Supervised nine Product Support Specialists in the International Transaction Desk, a central point of escalation for queries and problems related to the Global Foreign Exchange Trading System. Coordinated problem resolution among Help Desks, Development, Operations, Senior Management and Administration Groups. Produced management, system and regulatory reports.</p>
              <ul>
                <li>Expedited implementation of problem management tool by resolving problems with the initial setup of their Unix server.</li>
                <li>Coordinated Transaction Desk responsibilities during development of the foreign exchange trading system from Product Functional Specification (PFS), through Systems Acceptance Testing (SAT), Product Acceptance Testing (PAT) and Beta Testing to Product Launch.</li>
                <li>Assisted Development group in troubleshooting problems with the Unix-based Bank of Japan regulatory reporting system.</li>
                <li>Streamlined monthly and weekly reporting by standardizing report formats and automating data retrieval process.</li>
                <li>Accelerated new hire productivity rate by developing a formalized training and coaching program.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                2015-2016
              </h6>
            </div>
          </div>
        </div>

      </div>

      <div class="card card-body work py-5 my-5">
        <h3>Periphonics Corp.</h3>
        <p class="lead">Bohemia, NY</p>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Technical Support Specialist</h4>

              <p class="card-text">Provided telephone support for Periphonics' Interactive Voice Response units including Unix (Solaris) support, telecommunications connections (PBXs, ACDs, ISDN, fax, etc.), mainframe host connectivity and applications support. Applications programming using Periphonics' proprietary GUI and COBOL-based programming languages.</p>
              <ul>
                <li>Designed and implemented C2-level security system for Internal Revenue Service’s Telefile application (filing Federal Income Tax returns by telephone). Developed and presented training course for Internal Revenue Service on Network Security and wrote supporting technical manuals.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1995-1996
              </h6>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-body work py-5 my-5">
        <h3>Computer Associates International, Inc.</h3>
        <p class="lead">Islandia, NY</p>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Temporary Technical Support Representative</h4>
              <p class="card-text">Provided telephone support for the Simply Tax application.</p>

            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1994
              </h6>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-body work py-5 my-5">
        <h3>Sabena Belgian World Airlines</h3>
        <p class="lead">Manhasset, NY</p>

        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Information Systems Assistant</h4>
              <p class="card-text">Designed databases, implemented new queries, and performed system maintenance. Supervised data entry staff. Executed database file transfers using modem and 9-track tape.  Prepared reports for local management and corporate headquarters in Belgium.</p>
              <ul>
                <li>Reduced company expenses by implementing a computerized commission verification program avoiding payment of unearned commissions.</li>
                <li>Translated official documents in Italian, French, Dutch and Spanish.</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1992-1993
              </h6>
            </div>
          </div>
        </div>
        <div class="card-deck mb-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Rate Agent</h4>
              <p class="card-text">Determined best fares for passengers travelling on complicated itineraries using 5 different airline computer systems.</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1992-1993
              </h6>
            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sales Service Agent</h4>
              <p class="card-text">Provided multilingual customer service to passengers and travel agents, assisting with itineraries and itinerary changes.</p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1992-1993
              </h6>
            </div>
          </div>
        </div>

      </div>
      <div class="card card-body work py-5 my-5">
        <h3>Alitalia Italian Airlines</h3>
        <p class="lead">New York, NY</p>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Telephone Sales Agent / Flight Check Agent</h4>
              <p class="card-text">Responded to passenger requests in multiple languages and set up new bookings for international flights. Managed flight provisioning requirements.</p>
              <ul>
                <li>Selected to participate in Alitalia's Management Training Program</li>
              </ul>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">
                1992-1993
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="collapse">
      <div class="card card-body contact text-white py-5">

        <h2>Contact Me!</h2>
        <p style="margin-bottom:0;">Joe Redinger</p>
        <p style="margin-bottom:0;">446 15th Ave NE</p>
        <p>St. Petersburg FL 33704</p>
        <p class="fa fa-envelope"> jredinger@gmail.com</p>
        <div>LinkedIn<a class="fa fa-linkedin p-2" href="https://www.linkedin.com/in/joeredinger/" target="_blank"></a></div>
        <a href="docs/Resume-Redinger.pdf" target="_blank" class="btn btn-sm bg-white text-dark btn-outline-dark"><i class="fa fa-file-text"></i> Download My Resume</a>
      </div>

      <div class="card card-body py-5">
        <h3>Get in touch</h3>

        <div id="form-messages"></div>

        <form id="contactform" method="post" action="mail.php">
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon contact text-white">
                <i class="fa fa-user"></i>
              </span>
              <input id="name" type="text" class="form-control bg-dark text-white" name="name" placeholder="Your Name">

            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon contact text-white">
                <i class="fa fa-envelope"></i>
              </span>
              <input id="email" type="email" class="form-control bg-dark text-white" name="email" placeholder="Your Email">

            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon contact text-white">
                <i class="fa fa-building"></i>
              </span>
              <input id="company" type="text" class="form-control bg-dark text-white" name="company" placeholder="Your Company">

            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon contact text-white">
                <i class="fa fa-pencil"></i>
              </span>
              <textarea rows="10" id="comment" class="form-control bg-dark text-white" name="comment" placeholder="Your Message"></textarea>
            </div>
          </div>
          <input id="emailsubmit" type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">


        </form>
      </div>


    </div>


    <!-- FOOTER -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
      <div class="row">
        <div class="col-md-6">
          <a href="docs/Resume-Redinger.pdf" target="_blank" class="btn btn-outline-light"><i class="fa fa-file-text"></i> Download My Resume</a>
        </div>
        <div class="col-md-6 align-items-right">
          <div>Follow me on LinkedIn<a class="fa fa-linkedin p-3" href="https://www.linkedin.com/in/joeredinger/" target="_blank"></a></div>

        </div>


      </div>
      <!-- jquery script at bottom provides current year -->
      <i class="fa fa-copyright"></i> <span id="year"></span><span> Joseph Redinger</span>
    </footer>

  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script>
  $('.port-item').click(function(){
    $('.collapse').collapse('hide');
  });
</script>
<script>
//Get current year for copyright notice
$('#year').text(new Date().getFullYear());
</script>

</body>
</html>
