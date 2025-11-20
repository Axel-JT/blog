<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Blog | Design Moderne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#028090',
                        secondary: '#2D3142',
                        tertiary: '#B8F3FF'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Dégradé pour l'arrière-plan */
        .gradient-bg {
            background: linear-gradient(135deg, #028090 0%, #2D3142 100%);
        }

        /* Effet hover sur les cartes */
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Effet hover sur les tags */
        .tag {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .tag:hover {
            background-color: #2D3142 !important;
            color: white;
        }

        /* Barre de progression de lecture */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: #028090;
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Ajout de la couleur de focus pour les champs de saisie */
        .focus\:ring-primary:focus {
            border-color: #028090;
            box-shadow: 0 0 0 2px rgba(2, 128, 144, 0.3);
        }

        /* Sélecteurs plus spécifiques pour éviter les conflits */
        #create .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #create .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Réglage de la visibilité pour la section cachée */
        #create {
            display: none;
        }

        #create.show {
            display: block;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">

    <section id="create" class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary mb-4">Publier un nouvel article</h2>
                <p class="text-gray-600">Partagez vos connaissances et expériences avec la communauté</p>
            </div>

            <form action="{{ route('posts.store') }}" method="POST" class="bg-gray-50 rounded-2xl shadow-md p-8">
                @csrf
                @method('post')
                <div class="mb-6">
                    <label for="post-title" class="block text-gray-700 mb-2 font-medium">Titre de l'article</label>
                    <input type="text" name="title" id="post-title"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Donnez un titre accrocheur à votre article" required>
                </div>

                <div class="mb-6">
                    <label for="post-content" class="block text-gray-700 mb-2 font-medium">Contenu</label>
                    <textarea name="content" id="post-content" rows="12"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Rédigez votre article ici..." required></textarea>
                </div>

                <div class="flex flex-col sm:flex-row justify-between gap-4">
                    <a href="#posts"
                        class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-400 transition-colors font-medium text-center">
                        Annuler
                    </a>
                    <button type="submit"
                        class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition-colors font-medium">
                        <i class="fas fa-paper-plane mr-2"></i> Publier l'article
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script>
        // Ce script va permettre d'afficher la section #create lorsque l'on appuie sur un bouton (ou tout autre événement)
        document.addEventListener('DOMContentLoaded', function () {
            // Afficher la section après 2 secondes (ou déclencher la logique d'affichage selon ton besoin)
            setTimeout(function () {
                document.getElementById('create').classList.add('show');
            }, 2000); // Ajuste le délai selon tes besoins
        });
    </script>

</body>

</html>
