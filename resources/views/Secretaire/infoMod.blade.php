<x-dashboardSec>
	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('assets\css_secretaire\style.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sub.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\custom.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\sec.css')}}">
		<link rel="stylesheet" href="{{asset('assets\css_secretaire\infoMod.css')}}">
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

 
          
          <!--content start -->
          <div id="moduleheader">
             <h2 id="Module">Intitule module</h2>
            <span class="infoMod"> Responsable:Mme Ilham Mounir</span>
          </div>
           
          <div class="composant-module">
             <h1>Cours:</h1>
             <span class="infoMod">Total heures:</span>
             <span class="infoMod">Groupes:</span>
             <table class="Groupes">
                <thead>
                    <th> Numero groupe</th>
                    <th>Enseignant chargé</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody> 
            </table>
          </div>
          <div class="composant-module">
             <h1>TD:</h1>
             <span class="infoMod">Total heures:</span>
             <span class="infoMod">Groupes:</span>
             <table class="Groupes">
                <thead>
                    <th> Numero groupe</th>
                    <th>Enseignant chargé</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody> 
            </table>

          </div>
          <div class="composant-module">
             <h1>TP:</h1>
             <span class="infoMod">Total heures:</span>
             <span class="infoMod">Groupes:</span>
             <table class="Groupes">
                <thead>
                    <th> Numero groupe</th>
                    <th>Enseignant chargé</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
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
</body>
</html>