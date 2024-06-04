<x-dashboardSec>
    <div class="row">
        <div class="col-md-12">
           <div class="table-wrapper">
             
           <div class="table-title">
             <div class="row">
                 <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">disponibilité des salles</h2>
                 </div>
                 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                   <a href="{{route('salleDispos.create')}}" class="btn btn-success btn-add" >
                   <i class="material-icons">&#xE147;</i>
                   <span>Ajouter une Salle</span>
                   </a>
                 </div>
             </div>
           </div>
           
            <!-- Filtre par enseignant -->
            <div class="row mt-3" style="background-color: #DAC0A3;width:101%; padding: 8px 15px; border-radius: 5px; margin-top: 0;">
                <div class="col-md-5">
                    <label for="cycleFilter" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Filtrer par Type :</label>
                    <select class="form-control" id="nomFilter" 
                    style="width: 100%; padding: 8px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="">Tous</option>
                        @foreach ($salleDispo as $item)
                        <option value="{{$item->TypeSalle}}">{{$item->TypeSalle}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            
    
           <table class="table table-striped table-hover">
              <thead>
                 <tr>
                 <th style="width: 250px"><strong >Type Salle</strong> </th>
                 <th><strong>Jour</strong></th>
                 <th><strong>Matin</strong></th>
                 <th><strong>Après-midi</strong></th>
                 
                 <th><strong>Action</strong></th>
                 </tr>
              </thead>
              
              <tbody>
                
                
    
                    <tr>
                        @foreach ($salleDisp as $item)
                        <td>{{$item->TypeSalle}}</td>
                        <td>{{$item->jour}}</td>
                        @if ($item->matin==1)
                        <td>&nbsp;&nbsp;Oui</td>
                        @else
                            <td>&nbsp;&nbsp;Non</td> 
                        @endif
                        
                        @if ($item->apres_midi==1)
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oui</td>
                        @else
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Non</td>
                        @endif
                       
                        <td>
                           <a href="#editFiliereModal" class="edit" data-toggle="modal">
                          <i style="color: rgb(255, 160, 8)" class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                          </a>
                          <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $item->id }}">
                            <i style="color: rgb(246, 72, 72)" class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                        </a>
                        </td>
                        </tr>
                        @endforeach
                       
    
                        
                     <!-- Autres lignes de dispo -->
              </tbody>
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
           </table>
         
           <div class="clearfix">
            <div class="hint-text">Affichage de <b>{{ $salleDisp->count() }}</b> sur <b>{{ $salleDisp->total() }}</b></div>
            {{ $salleDisp->links() }}
        </div>
       
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ajouter le gestionnaire d'événements pour le filtre de nom d'enseignant
            const nomFilter = document.getElementById('nomFilter');
            const tableRows = document.querySelectorAll('tbody tr');
    
            nomFilter.addEventListener('change', function() {
                const filterValue = this.value;
                tableRows.forEach(row => {
                    const nom = row.children[0].textContent.trim();
                    if (filterValue === "" || nom === filterValue) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });


    </script>
     <script>
        
        $(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("salleDispos.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
    </script>
</x-dashboard>