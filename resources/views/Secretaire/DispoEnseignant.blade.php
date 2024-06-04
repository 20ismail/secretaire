<x-dashboardSec>
	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\Enseignant.css')}}">
		
		
		
		<!--google fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  


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
        
    </div>
    <table>
        <thead>
            <tr>
				<th rowspan="2" class="empty"></th>
                <th colspan="6" id="profdispo">Prof disponibles</th>
            </tr>
            <tr>
                <th class="split-header" colspan="3">Matin</th>
                <th class="split-header" colspan="3">Après-midi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="jour">Lundi</td>
                <td colspan="3" >
					<div class="profs">
						<div class="prof_dispo">prof Hourri disponible</div>
						<div class="prof_dispo">prof Alaoui disponible</div>
						<div class="prof_dispo">prof Bayar disponible</div>
						
					</div>
				</td>
                <td colspan="3" ></td>
            </tr>
            <tr>
                <td class="jour">Mardi</td>
                <td colspan="3" ></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="jour">Mercredi</td>
                <td colspan="3"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="jour">Jeudi</td>
                <td colspan="3"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="jour">Vendredi</td>
                <td colspan="3"></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="jour">Samedi</td>
                <td colspan="3"></td>
                <td colspan="3"></td>
            </tr>
           
        </tbody>
    </table>
	</div>
	
	<script src="{{asset('assets\js_secretaire\jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\popper.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\bootstrap.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\fun.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\style.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\salle.js')}}"></script>
   <script src="{{asset('assets\js_secretaire\list.js')}}"></script>

</x-dashboardSec>
