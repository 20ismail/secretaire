<x-dashboardSec>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 30px;
            margin-left:50px;
        }
        .header-info{
            display:inline-block;
            justify-content:space-between;
        }

        .profile-info .nom {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-info .role {
            font-size: 18px;
            color: #555;
        }

        .profile-info .email {
            font-size: 16px;
            color: #777;
        }

        .information-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .btn-modifier, .btn-can, .btn-addsalle {
            background-color: #102C57;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-can {
            background-color: #6c757d;
        }

        .btn-modifier:hover, .btn-can:hover, .btn-addsalle:hover {
            background-color: #0056b3;
        }

        .btn-can:hover {
            background-color: #5a6268;
        }

        .modal-content {
            border-radius: 8px;
        }

        .modal-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .modal-header .close {
            color: white;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>

<div class="container">
        @if (Auth::check())
            <img 
                @if (Auth::user()->image != NULL)
                    src="{{ asset('storage/' . Auth::user()->image) }}"
                @else
                    src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" 
                @endif
                alt="Image de profil" class="profile-image">
            <div class="profile-info">
                <p class="nom">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</p>
                <p class="role">Secrétaire</p>
                <p class="email"><i class="fa-regular fa-envelope"></i>&nbsp; {{ Auth::user()->email }}</p>
            </div>
            <div class="information-card">
                <div class="flex-container">
                    <p class="inf">Informations personnelles</p>
                    <a href="#editProfile" class="edit" data-toggle="modal">
                        <button class="btn-modifier"><i class="fa-regular fa-pen-to-square"></i>&nbsp;&nbsp;Modifier </button>
                    </a>
                </div>
                <p><strong>Nom :</strong> {{ Auth::user()->nom }}</p>
                @if (Auth::user()->prenom != NULL)
                    <p><strong>Prénom :</strong> {{ Auth::user()->prenom }}</p>
                @endif
                <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                @if (Auth::user()->numTelephone != NULL)
                    <p><strong>Téléphone :</strong> {{ Auth::user()->numTelephone }}</p>
                @endif
            </div>
        @else
            <script type="text/javascript">
                window.location.href = "{{ route('secretaire.login') }}";
            </script>
        @endif
    </div>
    
    
    <!-- Édition -->
    <div class="modal fade" tabindex="-1" id="editProfile" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="{{ route('secretaire.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom :</label>
                            <input type="text" class="form-control" name="nom" value="{{ Auth::user()->nom }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Prénom :</label>
                            <input type="text" class="form-control" name="prenom" value="{{ Auth::user()->prenom }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Téléphone :</label>
                            <input type="text" class="form-control" name="numTelephone" value="{{ Auth::user()->numTelephone }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Mot de passe :</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        
                        <div class="form-group">
                            <label>Image :</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success btn-addsalle">Modifier</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- Fin de l'édition -->
    
</x-dashboardSec>
