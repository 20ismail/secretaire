<x-dashboardSec>
	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\mod.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\salle.css')}}">
      
		
		
		<!--google fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
	  <!--ajax link-->
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
  




		  <!--content start-->

		  <div class="page-content">
		  <div class="Salle_header">
		  	<h2 class="SalleTitle">Entrez disponnibilité de vos salles:</h2>
        </div>
		@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
	@endif

		  <form  method="POST" action="{{route('salleDispos.store')}}" id="salle-form">
		  @csrf
    <label for="jours">Jours:</label>
    <select id="jours" name="jours">
        <option value="">Selectionner un jours</option>
        <option value="Lundi">Lundi</option>
        <option value="Mardi">Mardi</option>
		<option value="Mercredi">Mercredi</option>
        <option value="Jeudi">Jeudi</option>
		<option value="Vendredi">Vendredi</option>
        {{-- <option value="Samedi">Samedi</option> --}}
		

        <!-- Add other days as needed -->
    </select>
    <br>
	<hr>

	<label>Temps:</label> 
    <br>
    <input type="radio" id="morning" name="time" value="Matin">
    <label for="morning">Matin</label>
    
    <input type="radio" id="afternoon" name="time" value="Après-midi">
    <label for="afternoon">Après-midi</label>
    <br>

   <hr>
   <label>Type Salle:</label>
    <br>
	
		<div class="type-salle-option">
			<input type="checkbox" id="amphi" name="type_salle" value="amphi">
			<label for="amphi">Amphi</label>
			<div class="sub-options" id="sub-options-amphi">
				@foreach ($Amphi as $item)
				<input type="checkbox" id="amphi-option{{$item->numero}}" name="amphi[]" value="{{$item->numero}}">
				<label for="amphi-option{{$item->numero}}">{{$item->TypeSalle}} {{$item->numero}}</label>
				<br>
			@endforeach
			
				
			</div>
			
		</div>
		<div class="type-salle-option">
			<input type="checkbox" id="mini_amphi" name="type_salle" value="mini_amphi">
			<label for="mini_amphi">Mini-Amphi</label>
			<div class="sub-options" id="sub-options-mini_amphi">
					@foreach ($miniAmphi as $item)
					<input type="checkbox" id="mini-amphi{{$item->numero}}" name="mini[]" value="{{$item->numero}}">
					<label for="mini-amphi{{$item->numero}}">{{$item->TypeSalle}} {{$item->numero}}</label>
					<br>
					@endforeach
				
				
			</div>
		</div>
		<div class="type-salle-option">
			<input type="checkbox" id="salle_td" name="type_salle" value="salle_td">
			<label for="salle_td">Salle de TD</label>
			<div class="sub-options" id="sub-options-salle_td">
				@foreach ($salleTd as $item)
				<input type="checkbox" id="salle-td{{$item->numero}}" name="salletd[]"  value="{{$item->numero}}">
				<label for="salle-td{{$item->numero}}">{{$item->TypeSalle}} {{$item->numero}}</label>
				<br>
				@endforeach
				
				
			</div>
		</div>
		<div class="type-salle-option">
			<input type="checkbox" id="salle_tp" name="type_salle" value="salle_tp">
			<label for="salle_tp">Salle de TP</label>
			<div class="sub-options" id="sub-options-salle_tp">
				@foreach ($salleTp as $item)
				<input type="checkbox" id="salle-tp{{$item->numero}}" name="salletp[]" value="{{$item->numero}}">
				<label for="salle-tp{{$item->numero}}">{{$item->TypeSalle}} {{$item->numero}}</label>
				<br>
				@endforeach
				
				
			</div>
		</div>
		<div class="button-container">
			<a href="{{route('salleDispos.index')}}" class="button-link">Retour</a>
			<button type="submit" class="button-submit">Enregistrer</button>
		</div>
	<style>
	.button-container {
    display: flex;
    gap: 10px; /* Espace entre les éléments */
}

.button-link {
    background-color: #102C57;
    text-decoration: none;
    width: 200px;
    color: aliceblue;
    display: inline-block;
    text-align: center;
    padding: 10px 20px;
    border-radius: 5px;
    /* cursor: pointer; */
}

.button-submit {
    padding: 10px 20px;
    background-color: #102C57;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button-submit:hover {
    background-color: #102C57; /* Change the background color on hover */
	
}

.button-link:hover {
    background-color: #102C57; /* Change the background color on hover */
	text-decoration: none;
	color: rgb(255, 255, 255)
}

	
	</style>		
		
   

   
</form>
</div>  
              	


	<script src="{{asset('assets\js_secretaire\jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\popper.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\bootstrap.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\fun.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\style.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\salle.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\soo.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\enre.js')}}"></script>
   


		
        
        
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
			
			document.querySelectorAll('input[name="type_salle"]').forEach((checkbox) => {
        checkbox.addEventListener('change', handleCheckboxChange);
    });

    function handleCheckboxChange(event) {
        const checkbox = event.target;
        const subOptionsContainer = document.getElementById(`sub-options-${checkbox.value}`);
        subOptionsContainer.style.display = checkbox.checked ? 'block' : 'none';
    }
    
</script>
		

</x-dashboardSec>
