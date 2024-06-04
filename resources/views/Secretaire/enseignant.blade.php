<x-dashboardSec>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\mod.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\Enseignant.css')}}">
      
		
		
		<!--google fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
		
		
		<!--google fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

	 
  
		  </div>
		  <header class="header">
			<h1 class="title">Secrétaire du département Génie Informatique</h1></b> 
			 <p class="welcome">Bienvenue Mme MINA</p>
		 </header>
		 <header class="header_module">
			<div class="container">
			  <h1>Enseignants</h1>
			  <nav class="navigation">
				<ul class="nav-list">
				  <li class="nav-item-upper"><a href="DispoEnseignant.html">Disponiblités Enseignants</a></li>
				  <li class="nav-item-upper"><a href="ModEnseigne.html">Informations d'enseignants</a></li>
				 
				</ul>
			  </nav>
			</div>
		  </header>

		  <main class="main">
			<div class="container">
			  <div class="card-container">
				<div class="card">
				  <img class="card-image" src="{{asset('assets\img_secretaire\enseignant.jpg')}}" alt="DUT Image">
				  <h4><li class="nav-item"><a href="DispoEnseignant.html">Disponiblités Enseignants</a></li></h4>
				  
				</div>
				<div class="card">
				  <img class="card-image" src="{{asset('assets\img_secretaire\enseignant.jpg')}}" alt="LP Image">
				  <h4><li class="nav-item"><a href="ModEnseigne.html">Informations d'enseignants</a></li></h4>
				  
				</div>
				
			  </div>
			</div>
		  </main>
		  











		  
		  <script src="js/scriptt.js"></script>
		  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		</script>
		 <!-- Option 1: Bootstrap Bundle with Popper -->
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			  
		
		 <script src="{{asset('assets\js_secretaire\jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\popper.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\bootstrap.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\fun.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\style.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\salle.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\list.js')}}"></script>
		
		
		<script type="text/javascript">
			 $(document).ready(function(){
				$(".xp-menubar").on('click',function(){
				  $("#sidebar").toggleClass('active');
				  $("#content").toggleClass('active');
				});
				
				$('.xp-menubar,.body-overlay').on('click',function(){
				   $("#sidebar,.body-overlay").toggleClass('show-nav');
				});
				
			 });
		</script>
		
			 
							   
</x-dashboardSec>