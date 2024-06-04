<x-dashboardSec>
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\dut.css')}}">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	    
	

				
		<!--google fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  
  



          <header>
            <h1>DUT Modules</h1>
        </header>
        
        <div class="searchBar">
			<select id="semesterSelect">
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
				<option value="S4">S4</option>
			</select>
			<button type="button" id="searchbutton">Search</button>
			<button id="addModuleBtn">Add Module</button>
		</div>

		
        
        
        <div class="moduleContainer">
            <a href="module1.html" class="moduleBox" style="background-image: url('ima.jpg');">
                Module 1
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="module2.html" class="moduleBox" style="background-image: url('module2.jpg');">
                Module 2
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="module2.html" class="moduleBox" style="background-image: url('module2.jpg');">
                Module 3
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="module2.html" class="moduleBox" style="background-image: url('module2.jpg');">
                Module 4
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="module2.html" class="moduleBox" style="background-image: url('module2.jpg');">
                Module 5
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="module2.html" class="moduleBox" style="background-image: url('module2.jpg');">
                Module 6
                <div class="actions">
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <!-- Add more module links here -->
        </div>
            <!-- Add more module boxes here -->
        </div>
        


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