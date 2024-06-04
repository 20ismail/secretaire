<x-dashboardSec>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Groupes</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter groupes</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3" style="background-color: #DAC0A3; width:101%; padding: 8px 15px; border-radius: 5px; margin-top: 0;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="cycle" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Choisir le Cycle :</label>&nbsp;&nbsp;
                    <select id="cycle" onchange="afficherModules()" style="width: 13%; height: fit-content; padding: 3px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="tous">Tous</option>
                        <option value="DUT">DUT</option>
                        <option value="LP">LP</option>
                        <option value="Master">Master</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="filiere" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Choisir la Filière :</label>&nbsp;&nbsp;
                    <select id="filiere" onchange="afficherModules()" style="width: 13%; height: fit-content; padding: 3px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="tous">Tous</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Sécurité Informatique">Sécurité Informatique</option>
                    </select>
                    
               
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
							<th><strong>Filière</strong></th>
                            
                            <th><strong>Cycle</strong></th>
                            <th><strong>Semestre</strong></th>
                            
                            <th><strong>Type</strong></th>
                           
                            <th><strong>nombre groupe</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody id="moduleTableBody">
                        @foreach ($results as $item)
                        <tr data-id="{{$item->id}}">
                            <td>{{$item->intitule_filiere}}</td>
                            <td>{{$item->cycle}}</td>
                            <td>{{$item->numeroSemestre}}</td>
                            <td>{{$item->intitule}}</td>
                            <td>{{$item->nbr_groupes}}</td>
                        
                            
                            <td>
                                <a href="{{route('composents.edit',$item->composent_id)}}" class="edit"  >
                                    <i class="material-icons" style="color: rgb(255, 160, 8)"  data-toggle="tooltip" data-toggle="modal" title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{$item->composent_id  }}">
                                    <i class="material-icons" style="color: rgb(246, 72, 72)" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                </a>
                            </td>
                        </tr>
                         <!----delete-modal start--------->
      
                    @endforeach
                    
                    <div id="deleteConfirmModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">						
                                    <h4 class="modal-title">Confirmer la suppression</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">					
                                    <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                                    <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <form id="deleteForm" action="" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                  
        
        
       
        
        <script>

$(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("composents.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
   
          
        </script>
        
        
        
        <!----delete-modal end--------->
                   
                        
                        
               
                
        {{-- <div class="clearfix">
            <div class="hint-text">Affichage de <b>{{$results->count()}}</b> sur <b>{{$results->total()}}</b></div>
            {{$results->links() }}
        </div>
     --}}
         <!----add-modal start--------->
         <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter Groupes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('composents.store')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="cycleSelect">Cycle</label>
                                <select id="cycleSelect" class="form-control" name="cycle">
                                    <option value="DUT" >DUT</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                            <div>
                                {{-- {{$selectedCycle}} --}}
                            </div>
                            
                            <div class="form-group">
                                <label for="filiereSelect">Filière</label>
                                <select id="filiereSelect" class="form-control" name="name">
                                    <!-- Remplacez les options ci-dessous par les filières disponibles -->
                                    @foreach ($fil2 as $fil)
                                    <option value="{{$fil->intitule_filiere}}">{{$fil->intitule_filiere}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="semestre">Semestre</label>
                                <select id="semestre" class="form-control" name="numeroSemestre">
                                    @foreach ($semestre as $item)
                                    <option value="{{$item->numeroSemestre}}">{{$item->numeroSemestre}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label for="heuresCourInput">Nombre groupe cours</label>
                                <input type="number" id="heuresCourInput" class="form-control" name="nbr_cours" required>
                            </div>
                            <div class="form-group">
                                <label for="heuresTDInput">Nombre groupe TD</label>
                                <input type="number" id="heuresTDInput" class="form-control" name="nbr_td"  required>
                            </div>
                            <div class="form-group">
                                <label for="heuresTPInput">Nombre groupe TP</label>
                                <input type="number" id="heuresTPInput" class="form-control" name="nbr_tp"  required>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success btn-addsalle" onclick="ajouterModule()">Ajouter</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
        
    
    <!----edit-modal end--------->
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
        .btn-add-module {
            background-color: #102C57;
            color: white;
            border: 1px solid #102C57;
            padding: 5px 25px;
            border-radius: 50px;
            cursor: pointer;
        }
    </style>
  


    
 </x-dashboard>