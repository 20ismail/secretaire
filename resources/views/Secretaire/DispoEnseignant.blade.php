
<x-dashboardSec>
	    <style>
		
body {
    font-family: Arial, sans-serif;
}

<<<<<<< HEAD
.dropdowncontainer {
    background-color: #DAC0A3;
    width: 100%;
    margin: 10px 0;
    padding: 20px;
    display: flex;
    align-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }
  
  .dropdown {
    display: inline-block;
    flex-direction: column;
    gap: 10px;
  }
=======
<<<<<<< HEAD
  


    <!--content start-->
	<div class="page-content">
    <div class="dropdowncontainer">
        <div class="dropdown">
            <label for="cycle">Cycle:</label>
            <select id="cycle">
                <option value="DUT">DUT</option>
                <option value="LP">LP</option>
                <option value="MASTER">MASTER</option>
            </select>
        </div>
        <div class="dropdown">
            <label for="semestre">Semestre:</label>
            <select id="semestre">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
            </select>
        </div>
        
=======
	
	
	  
  </head>
  <body>
>>>>>>> a59adc2abbcc43c9742eea8ee21246bfa0039505
  
  .dropdown label {
    margin-bottom: 3px;
    color: #102C57;
    font-weight: bold;
  }
  
  .dropdown select {
    width: 300px;
    padding: 10px;
    border: 1px solid #102C57;
    border-radius: 5px;
    background-color: #f3ece4;
    color: #102C57;
    font-weight: bold;
  }
  
  
  table {
  width: 100%;
  border-collapse: collapse;
  margin: 0px;
}

tr{
  border-bottom: 2px solid #DAC0A3;
}

th, td {
  padding: 15px;
  text-align: left;
}

th {
  background-color: whitesmoke;
  font-weight: bold;
  color:#102C57;
}

tr:nth-child(even) {
  background-color: #eceaea;
}

tr:hover {
  background-color: #f1f1f1;
}

tr {
  transition: background-color 0.2s ease;
}

@media (max-width: 768px) {
  th, td {
      padding: 10px;
      font-size: 14px;
  }

  select {
      width: 100%;
      margin: 10px 0;
  }
}

.profs-dispo{
    display: block;
    width:100%;
    margin:0;
    padding:0;
}
 
	    </style>
	   <!-- Hidden input to store the secretaire ID -->
@if(auth()->check())
        <input type="hidden" id="secretaireId" value="{{ auth()->user()->id }}">
    @else
        <p>User is not authenticated. Please log in.</p>
        <script>
            // Optionally redirect to login page 
            window.location.href = "{{ route('login') }}";
        </script>
    @endif
	<div class="content-header">
		<p>Dispo Enseignants: </p>
<<<<<<< HEAD

</div>


    <!--content start-->
=======
>>>>>>> f360606ccb2b4daa5a77cc5a1105ec26e587f71a
    </div>
>>>>>>> a59adc2abbcc43c9742eea8ee21246bfa0039505


	<div class="dropdowncontainer">
    <div class="dropdown">
        <label for="select-semestre">Semestre:</label>
        <select id="select-semestre">
            <option value="">-- Sélectionner un semestre --</option>
            @foreach ($semestres as $semestre)
                <option value="{{ $semestre->numeroSemestre }}" {{ isset($selectedSemestre) && $selectedSemestre ==$semestre->numeroSemestre ? 'selected' : '' }}>
                    {{ $semestre->numeroSemestre }}
                </option>
            @endforeach
        </select>
    </div>
</div>  



<table id="prof_table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Jour</th>
            <th>Matin</th>
            <th>Après-Midi</th>
            <th>Semestre</th>
        </tr>
    </thead>
    <tbody>
        @if($selectedSemestre)
            @if(count($disponibilites) > 0)
                @foreach ($disponibilites as $dispo)
                    <tr>
                        <td>{{ $dispo->professeur->nom }}</td>
                        <td>{{ $dispo->professeur->prenom }}</td>
                        <td>{{ $dispo->jour }}</td>
                        <td>{{ $dispo->matin ? 'Oui' : 'Non' }}</td>
                        <td>{{ $dispo->apres_midi ? 'Oui' : 'Non' }}</td>
                        <td>{{ $dispo->semestre ? $dispo->semestre->numeroSemestre : 'N/A' }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Aucune disponibilité trouvée pour le semestre sélectionné.</td>
                </tr>
            @endif
        @else
            <tr>
                <td colspan="6">Veuillez sélectionner un semestre pour voir la disponibilité des enseignants.</td>
            </tr>
        @endif
    </tbody>
</table>
		
		
	
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
			  
			  <script type="text/javascript">
	
               
	document.addEventListener('DOMContentLoaded', function() {
    const semestreSelect = document.getElementById('select-semestre');
    const profTableBody = document.querySelector('#prof_table tbody');

    semestreSelect.addEventListener('change', function(event) {
        event.preventDefault(); // Prevent default form submission

        const selectedSemestre = this.value;
        console.log('Selected semestre:', selectedSemestre);

        // Simulate form submission to update the page with selected semester
        if (selectedSemestre !== '') {
            window.location.href = `?select-semestre=${selectedSemestre}`;
        }
    });

   
});

<<<<<<< HEAD
=======
<<<<<<< HEAD
</x-dashboardSec>
=======
				   document.getElementById('select-semestre').addEventListener('change', function() {
            const selectedSemestre = this.value;
            const rows = document.querySelectorAll('.dispo-row');
>>>>>>> a59adc2abbcc43c9742eea8ee21246bfa0039505

    </script>
			  
                   
                                     
 </body>
 
 </html>
<<<<<<< HEAD

</x-dashboardSec>

=======
>>>>>>> f360606ccb2b4daa5a77cc5a1105ec26e587f71a
>>>>>>> a59adc2abbcc43c9742eea8ee21246bfa0039505
