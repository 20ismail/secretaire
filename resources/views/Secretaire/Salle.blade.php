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
		  <!doctype html>
		  <div class="Salle_header">
		  	<h2 class="SalleTitle">Disponibilité des salles</h2>
			<div class="saveandmodify">
			  <button class="modify-button">Modifier</button>
			  
			  <form>
        @csrf
   
    <button class="save">Enregistrer</button>io


			</div>
		  </div>
		 
		  <table>
		  
			  <tr>
				<td  rowspan="3" class="jour">Lundi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
							 
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select" multiple>
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
								
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  <tr>
				<td  rowspan="3" class="jour">Mardi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
						
							  <option value="Non disponible">Non disponible</option>
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								 
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
								
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  <tr>
				<td  rowspan="3" class="jour">Mercredi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
							  <option value="Non disponible">Non disponible</option>
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
								
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
								
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  <tr>
				<td  rowspan="3" class="jour">Jeudi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
							 
							  <option value="Non disponible">Non disponible</option>
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								  
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  <tr>
				<td  rowspan="3" class="jour">Vendredi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
							
							  <option value="Non disponible">Non disponible</option>
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								  
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  <tr>
				<td  rowspan="3" class="jour">Samedi</td>
				<tr>
					<td class="matinApresmidi">
						Matin
					</td>
					<td>
					<div class="slider">
						<div class="select-wrapper">
							<select name="amphi" id="amphi_select" class="salle_select">
							  <option value="Non disponible">Non disponible</option>
							</select>
							<select name="Mini Amphi" id="Mini_amphi_select" class="salle_select">
							
							  </select>
							<select name="Salle TD" id="Salle_TD_select" class="salle_select">
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							  <select name="Salle TP" id="Salle_TP_select" class="salle_select" >
								
								<option value="Non disponible">Non disponible</option>
							  </select>
							 
							 
						  </div>
						
						
					</div>
					</td>

				</tr>
				<tr>
					<td class="matinApresmidi">
						Après-midi
					</td>
					<td>
						<div class="slider">
							<div class="select-wrapper">
								<select name="amphi" id="amphi_select" class="salle_select">
								  
								  <option value="Non disponible">Non disponible</option>
								</select>
								<select name="Mini Amphi" id="Mini-amphi-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								<select name="Salle TD" id="Salle TD-select" class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								  <select name="Salle TP" id="Salle TP-select"class="salle_select">
									
									<option value="Non disponible">Non disponible</option>
								  </select>
								 
								 
							  </div>
							
							
						</div>
						
					</td>

				</tr>
				
			  </tr>
			  
		  </table>
</form>		


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
			

					/* multiple choices */
										document.addEventListener('DOMContentLoaded', function() {
					const selectElements = document.querySelectorAll('.salle_select');

					selectElements.forEach(selectElement => {
						const customDropdown = document.createElement('div');
						customDropdown.classList.add('custom-dropdown');

						const selectedDiv = document.createElement('div');
						selectedDiv.classList.add('dropdown-selected');
						selectedDiv.textContent = selectElement.name;  // Set initial text to the name attribute

						const dropdownList = document.createElement('div');
						dropdownList.classList.add('dropdown-list');

						Array.from(selectElement.options).forEach(option => {
						const customOption = document.createElement('div');
						customOption.textContent = option.textContent;
						customOption.dataset.value = option.value;

						customOption.addEventListener('click', function() {
							if (selectElement.multiple) {
							option.selected = !option.selected;
							customOption.classList.toggle('selected');
							} else {
							Array.from(selectElement.options).forEach(opt => opt.selected = false);
							option.selected = true;
							dropdownList.style.display = 'none';
							}
							updateSelectedText();
						});

						dropdownList.appendChild(customOption);
						});

						customDropdown.appendChild(selectedDiv);
						customDropdown.appendChild(dropdownList);
						selectElement.parentNode.insertBefore(customDropdown, selectElement);

						selectedDiv.addEventListener('click', function() {
						dropdownList.style.display = dropdownList.style.display === 'block' ? 'none' : 'block';
						});

						function updateSelectedText() {
						const selectedOptions = Array.from(selectElement.options)
							.filter(option => option.selected)
							.map(option => option.textContent);
						selectedDiv.textContent = selectedOptions.length > 0 ? selectedOptions.join(', ') : selectElement.name;
						}

						document.addEventListener('click', function(event) {
						if (!customDropdown.contains(event.target)) {
							dropdownList.style.display = 'none';
						}
						});
					});
					});



			
        </script>
		<script>$(document).ready(function() {
    $(".salle_select").on('change', function() {
        // Get selected course type, date, and time slot (replace with your actual selectors)
        var courseType = $("#course_type_select").val();
        var date = $("#date_picker").val(); // Assuming you have a date picker element
        var timeSlot = $(this).closest("tr").find(".matinApresmidi").text(); // Get time slot from table structure

        // Make AJAX request to fetch available rooms
        $.ajax({
            url: "/api/salles/disponibilites", // Replace with your actual API endpoint
            method: "GET",
            dataType: "json",
            data: {
                course_type: courseType,
                date: date,
                time_slot: timeSlot.toLowerCase() // Convert time slot to lowercase for case-insensitive matching (optional)
            },
            success: function(response) {
                // Update available room options in the dropdown
                var selectElement = $(this);
                selectElement.empty(); // Clear existing options

                response.forEach(function(room) {
                    var option = $("<option></option>");
                    option.val(room.id); // Assuming room has an ID property
                    option.text(room.name); // Assuming room has a name property
                    selectElement.append(option);
                });
            },
            error: function(error) {
                console.error("Error fetching available rooms:", error);
                // Handle errors gracefully, e.g., display an error message to the user
            }
        });
    });

    // (Optional) Update room assignments (if your backend supports it)
    // ... Add logic to handle user updates and send AJAX requests to the backend endpoint (e.g., /api/salles/assignments)
});
</script>
		

 </body>
 </html>
</x-dashboardSec>