<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Personnel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .post-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #3B3E75;
        }
        
        .post-card:hover {
            transform: translateY(-5px);
        }
        
        .view-btn {
            transition: all 0.3s ease;
        }
        
        .view-btn:hover {
            transform: scale(1.1);
            color: #93c5fd;
        }

        .pagination-btn {
            transition: all 0.3s ease;
        }
        
        .pagination-btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-black min-h-screen">
    <!-- Header -->
    <header class="bg-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="bg-indigo-700 p-2 rounded-lg mr-3">
                        <i class="fas fa-blog text-white text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white">MonBlog</h1>
                </div>

                <!-- Navigation -->
                <nav class="flex items-center space-x-4">
                    <!-- État connecté (toujours visible sans JS) -->
                    <div class="flex items-center space-x-4">
                        <a href="/dashboard" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md">
                            <i class="fas fa-tachometer-alt mr-2"></i>
                            Dashboard
                        </a>
                        <a href="/logout" class="bg-indigo-800 hover:bg-indigo-900 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Déconnexion
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- En-tête de section -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-white mb-4">Mes Derniers Posts</h2>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Découvrez mes réflexions, idées et partages sur divers sujets qui me passionnent.</p>
        </div>
        
        <!-- Section des posts -->
        <div class="px-4 py-6 sm:px-0">
            <!-- Grille des posts -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=1" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Technologie</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">L'avenir du développement web</h3>
                        <p class="text-gray-200 mb-4">Dans cet article, j'explore les tendances émergentes dans le développement web et comment elles façonneront notre façon de créer des expériences en ligne dans les années à venir.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">15/01/2024</span>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=2" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Voyage</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Voyage au cœur des Alpes</h3>
                        <p class="text-gray-200 mb-4">Récit de mon incroyable randonnée de 5 jours à travers les paysages magnifiques des Alpes suisses. Découvrez les sentiers cachés et les vues à couper le souffle.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">10/01/2024</span>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=3" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Bien-être</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Les bienfaits de la méditation quotidienne</h3>
                        <p class="text-gray-200 mb-4">Comment intégrer seulement 10 minutes de méditation dans votre routine matinale peut transformer votre productivité et votre bien-être mental.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">05/01/2024</span>
                        </div>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=4" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Cuisine</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Recette : Gâteau au chocolat sans gluten</h3>
                        <p class="text-gray-200 mb-4">Une délicieuse recette de gâteau au chocolat moelleux, parfait pour ceux qui suivent un régime sans gluten mais ne veulent pas renoncer au goût.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">28/12/2023</span>
                        </div>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=5" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Apprentissage</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Comment j'ai appris une nouvelle langue en 3 mois</h3>
                        <p class="text-gray-200 mb-4">Partage de ma méthode intensive pour maîtriser les bases d'une nouvelle langue en seulement 90 jours, avec des conseils pratiques et des ressources.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">20/12/2023</span>
                        </div>
                    </div>
                </div>

                <!-- Post 6 -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 relative">
                    <a href="/show?post=6" class="absolute top-4 right-4 view-btn text-gray-300 hover:text-white bg-black/30 rounded-full p-2 z-10" title="Voir l'article">
                        <i class="fas fa-eye"></i>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Littérature</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Les meilleurs livres de 2023</h3>
                        <p class="text-gray-200 mb-4">Ma sélection personnelle des livres les plus marquants que j'ai lus cette année, couvrant plusieurs genres de la fiction à la non-fiction.</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-2">
                                    <i class="fas fa-user text-xs"></i>
                                </div>
                                <span class="text-white">Alex Martin</span>
                            </div>
                            <span class="text-gray-300">15/12/2023</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center space-x-4 mt-12">
                <a href="/?page=1" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg pagination-btn">
                    <i class="fas fa-chevron-left"></i>
                </a>
                
                <div class="flex space-x-2">
                    <a href="/?page=1" class="bg-indigo-700 text-white px-4 py-2 rounded-lg pagination-btn">1</a>
                    <a href="/?page=2" class="bg-gray-700 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg pagination-btn">2</a>
                    <a href="/?page=3" class="bg-gray-700 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg pagination-btn">3</a>
                </div>
                
                <a href="/?page=2" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800 mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="bg-indigo-700 p-2 rounded-lg mr-3">
                        <i class="fas fa-blog text-white text-xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-white">MonBlog</h2>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>
            <div class="mt-6 text-center text-gray-400 text-sm">
                <p>&copy; 2024 MonBlog. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>