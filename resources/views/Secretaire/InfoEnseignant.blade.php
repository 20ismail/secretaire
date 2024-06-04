<x-dashboardSec>
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\mod.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\modens.css')}}">
      
		
		
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

	
	
	  
  
	
<!-------- Professeurs--------->
		<div class="page-content">
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
		<p>Enseignants: </p>
    </div>


	<div class="dropdowncontainer">
        <div class="dropdown">
		<label for="professeur-select">filtrer par nom complet:</label>
		<select id="NomProfSelect">
			<option value="all">tout</option>
			@foreach($professeurs as $professeur)
				<option value="{{ $professeur->nom }}|{{ $professeur->prenom }}">{{ $professeur->nom }} {{ $professeur->prenom }}</option>
			@endforeach
		</select>
        </div>    
    </div>
      
    <table id="prof_table">
        <thead>
            <tr>
                <th id="NomProf">Nom</th>
                <th id="PrenomProf">Prénom</th>
                <th id="EmailProf">Email</th>
                <th id="NumTelProf">Numéro de téléphone</th>
                <th id="modProf">Modules enseignés</th>
            </tr>
        </thead>
        <tbody>
		@foreach($professeurs as $professeur)
            <tr data-nom="{{ $professeur->nom }}" data-prenom="{{ $professeur->prenom }}">
                <td>{{ $professeur->nom }}</td>
                <td>{{ $professeur->prenom }}</td>
                <td>{{ $professeur->email }}</td>
                <td>{{ $professeur->numTelephone }}</td>
                <td>
                    @foreach($professeur->modules as $module)
                        {{ $module->intitule_module }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
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
				   $(document).ready(function(){
					  $(".xp-menubar").on('click',function(){
						$("#sidebar").toggleClass('active');
						$("#content").toggleClass('active');
					  });
					  
					  $('.xp-menubar,.body-overlay').on('click',function(){
						 $("#sidebar,.body-overlay").toggleClass('show-nav');
					  });
					  
				   });
				   ///////////
/*
				   document.addEventListener('DOMContentLoaded', function() {
    const profSelect = document.getElementById('NomProfSelect');
    const profTableBody = document.querySelector('#prof_table tbody');

    profSelect.addEventListener('change', function() {
        const selectedValue = this.value;
        let nom = '';
        let prenom = '';

        if (selectedValue !== 'all') {
            [nom, prenom] = selectedValue.split('|');
        }

        fetch(`Secretaire/InfoEnseignant/filter?nom=${nom}&prenom=${prenom}`)
            .then(response => response.json())
            .then(data => {
                profTableBody.innerHTML = data.map(prof => `
                    <tr>
                        <td>${prof.nom}</td>
                        <td>${prof.prenom}</td>
                        <td>${prof.email}</td>
                        <td>${prof.phone}</td>
                        <td>${prof.modules}</td>
                    </tr>
                `).join('');
            })
            .catch(error => console.error('Error fetching professeur details:', error));
    });

    // Trigger change event to load data for the first option
    profSelect.dispatchEvent(new Event('change'));
});

document.addEventListener('DOMContentLoaded', function() {
            const profSelect = document.getElementById('NomProfSelect');
            const profTableBody = document.querySelector('#prof_table tbody');

            const professeurs = @json($professeurs);

            function renderTable(filteredProfs) {
                profTableBody.innerHTML = filteredProfs.map(prof => `
                    <tr>
                        <td>${prof.nom}</td>
                        <td>${prof.prenom}</td>
                        <td>${prof.email}</td>
                        <td>${prof.phone}</td>
                        <td>${prof.modules}</td>
                    </tr>
                `).join('');
            }

            profSelect.addEventListener('change', function() {
                const selectedValue = this.value;
                let filteredProfs = professeurs;

                if (selectedValue !== 'all') {
                    const [nom, prenom] = selectedValue.split('|');
                    filteredProfs = professeurs.filter(prof => prof.nom === nom && prof.prenom === prenom);
                }

                renderTable(filteredProfs);
            });

            // Initial render with all professeurs
            renderTable(professeurs);
		});

*/
document.addEventListener('DOMContentLoaded', function() {
            const profSelect = document.getElementById('NomProfSelect');
            const profTableBody = document.querySelector('#prof_table tbody');
            const allRows = Array.from(profTableBody.querySelectorAll('tr'));

            function filterTable() {
                const selectedValue = profSelect.value;
				console.log('Selected value:', selectedValue); // Debug log

                if (selectedValue === 'all') {
                    allRows.forEach(row => row.style.display = '');
                } else {
                    const [nom, prenom] = selectedValue.split('|');
                    allRows.forEach(row => {
                        const rowNom = row.getAttribute('data-nom');
                        const rowPrenom = row.getAttribute('data-prenom');
                        if (rowNom === nom && rowPrenom === prenom) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            }

            profSelect.addEventListener('change', filterTable);

            // Initial render with all professors visible
            filterTable();
        });
    </script>
 </x-dashboardSec>           
                                     