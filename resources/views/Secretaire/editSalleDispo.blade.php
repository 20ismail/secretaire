<x-dashboardSec>
    <style>
        
          .form-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                /* width: 300px; */
                width: 120vh;
        margin-top: 40px;
        margin-left: 190px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            label {
                display: block;
                margin-bottom: 5px;
            }
            input[type="text"], input[type="number"] {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .button-container {
                display: flex;
                justify-content: space-between;
            }
            button {
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            button.save {
                background-color: #a6935e;
                color: white;
            }
            button.previous {
                background-color: #102C57;
                color: white;
            }
        </style>
        
        <div class="form-container">
            {{-- {{dd($results->intitule)}} --}}
            <form action="{{route('composents.update',$results->composent_id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>type Salle</label>
                    <input name="type" value="{{$results->intitule}}" type="text" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label>Numero</label>
                    <input name="type" value="{{$results->intitule}}" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nume</label>
                    <input name="type" value="{{$results->intitule}}" type="text" class="form-control" required>
                </div>
                {{-- <div class="form-group">
                    <label for="filiereSelect">Filière</label>
                    <select name="intitule_filiere" id="filiereSelect" value="{{$results->intitule_filiere}}"  class="form-control">
                        @foreach ($fil as $int)
                        <option value="{{$int->intitule_filiere}}">{{$int->intitule_filiere}}</option>
                        @endforeach
                    </select>
                </div> --}}
               
                
              
                <div class="form-group">
                    <label>Nombre heures TD</label>
                    <input name="TD" type="number" class="form-control" value="{{$results->nbr_groupes}}" required>
                </div>
                @endif
               
               
             
                <div class="button-container">
                    <button type="submit" class="save">Enregistrer</button>
                    <a href="{{route('composents.index')}}"><button type="button" class="previous" onclick="history.back()">Page précédente</button></a>
                    
                </div>
            </form>
        </div>
    
    </x-dashboardSec>