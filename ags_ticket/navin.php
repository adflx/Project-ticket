<!--navbar when user login -->

        <nav class="navbar navbar-inverse navbar-static-top">
			
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  
              
           
		   </div>
			
            <div id="navbar" class="navbar-collapse collapse text-center" >
              <ul class="nav navbar-nav">
			  
			  
                
				
				
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a href="#">Staff Directory</a></li>
                    <li class="text-center"><a href="#">My Profile</a></li>
                   
                    
                  </ul>
                </li>
				
               
				 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tickets<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a href="#>Open</a></li>
                    <li class="text-center"><a href="#">Answered</a></li>
                    <li class="text-center"><a href="#">My Tickets</a></li>
                    <li class="text-center"><a href="#">Overdue</a></li>
                    <li class="text-center"><a href="#">Closed Tickets</a></li>
                    <li class="text-center"><a href="#">New Tickets</a></li>
                    
                  </ul>
                </li>
				
				
				
				
				
				
				
                
              </ul>
			  	
			   <ul class="nav navbar-nav navbar-right">
					
				
				<li class = "agsuser">	<a class= "nav-brand" href="#">Hello! <?php if(isset($_SESSION['name']))
					echo $_SESSION['name']; ?> </a> </li>
				
				<li><a href="#">Admin Panel</a></li>
				
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				
				
				</ul>
				

			  
            </div>
          </div>
          
        </nav>

   