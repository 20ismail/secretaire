<x-dashboardSec>
	  
	   
		   <header class="header">
			   
			  <h1 class="title">Secrétaire du département Génie Informatique</h1></b> 
			   <p class="welcome">Bienvenue Mme MINA</p>
		   </header>
		  
		   <main class="main">
			<div class="boxes-container">

				<div class="box_module">
					<img class="img" src="{{asset('assets\img_secretaire\ca.jpeg')}}" alt="" >
					<a href="{{ route('secretaire.module') }}"><h2>Modules</h2> </a> 
					
				</div>
		
				<div class="box_module">
					<img class="img" src="{{asset('assets\img_secretaire\ca.jpeg')}}" alt="">
					<a href="{{ route('salleDispos.index') }}"><h2>Salles</h2></a>
					
				</div>
		
				<div class="box_module">
					<img class="img" src="{{asset('assets\img_secretaire\ca.jpeg')}}"  alt="">
					<a href="{{ route('secretaire.enseignant') }}"><h2>Enseignants</h2></a>
				</div>
				<div class="box_module">
					<img class="img" src="{{asset('assets\img_secretaire\ca.jpeg')}}"  alt="">
					<a href="{{ route('secretaire.filiere') }}"><h2>Groupes</h2></a>
				</div>
			</div>
			
		</main>
			<button class="btn ">Nouveau EDT</button>
				
				</div>
		</main>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
   <script src="{{asset('assets\js_secretaire\jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\popper.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\bootstrap.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\fun.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\style.js')}}"></script>
   
   
   
   
   
  
  
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



  


