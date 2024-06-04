<x-dashboardSec>
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\mod.css')}}">
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
	<style>
		.fa-solid{
	color: #DAC0A3;
}
	</style>
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

 
<header class="header">
	<h1 class="title">Secrétaire du département Génie Informatique</h1></b> 
	 <p class="welcome">Bienvenue Mme MINA</p>
 </header>
 <header class="header_module">
    <div class="container">
      <h1>Modules</h1>
      <nav class="navigation">
        <ul class="nav-list">
          <li class="nav-item-upper"><a href="DUT.html">DUT</a></li>
          <li class="nav-item-upper"><a href="LP.html">LP</a></li>
          <li class="nav-item-upper"><a href="MASTER.html">Master</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">
    <div class="container">
      <div class="card-container">
        <div class="card">
          <img class="card-image" src="{{asset('assets\img_secretaire\ma.jpg')}}"alt="DUT Image">
          <h4><li class="nav-item"><a href="DUT.html">DUT</a></li></h4>
          
        </div>
        <div class="card">
          <img class="card-image" src="{{asset('assets\img_secretaire\ma.jpg')}}" alt="LP Image">
          <h4><li class="nav-item"><a href="LP.html">LP</a></li></h4>
          
        </div>
        <div class="card">
          <img class="card-image" src="{{asset('assets\img_secretaire\ma.jpg')}}" alt="Master Image">
          <h4><li class="nav-item"><a href="MASTER.html">Master</a></li></h4>
          
        </div>
      </div>
    </div>
  </main>
<footer class="footer">
 
	<p>&copy; 2024 ESTS</p>
  
</footer>

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


