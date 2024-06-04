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
                    <label>Intitulé</label>
                    <input name="type" value="{{$results->intitule}}" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cycleSelect">Cycle</label>
                    <select name="cycle" id="cycleSelect" class="form-control">
                        <option value="DUT" {{ $results->cycle == 'DUT' ? 'selected' : '' }}>DUT</option>
                        <option value="Licence" {{ $results->cycle == 'Licence' ? 'selected' : '' }}>Licence</option>
                        <option value="Master" {{ $results->cycle == 'Master' ? 'selected' : '' }}>Master</option>
                    </select>
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
                    <label for="filiereSelect">Filière</label>
                    <select  id="filiereSelect" class="form-control" name="branche">
                        @foreach ($fil as $int)
                            <option value="{{ $int->intitule_filiere }}" @selected($int->intitule_filiere == $results->intitule_filiere)>
                                {{ $int->intitule_filiere }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <select id="semestre" class="form-control" name="numeroSemestre">
                        @foreach ($semestre as $item)
                        <option value="{{$item->numeroSemestre}}" @selected($item->numeroSemestre == $results->numeroSemestre)>{{$item->numeroSemestre}}</option>
                        @endforeach
                    </select>
                </div>
                @if ($results->intitule=="Cours")
                <div class="form-group">
                    <label>Nombre heures cours</label>
                    <input name="Cours" type="number" class="form-control" value="{{$results->nbr_groupes}}" required>
                </div>
                @elseif($results->intitule=="TP")
                <div class="form-group">
                    <label>Nombre heures TP</label>
                    <input name="TP" type="number" class="form-control" value="{{$results->nbr_groupes}}" required>
                </div>
                @else
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