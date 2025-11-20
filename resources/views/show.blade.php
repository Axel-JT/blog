<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - Mon Blog Personnel</title>
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
        
        .comment-card {
            background-color: #2D2F54;
            transition: all 0.3s ease;
        }
        
        .comment-card:hover {
            background-color: #35386A;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
                    <a href="index.html" class="flex items-center">
                        <div class="bg-indigo-700 p-2 rounded-lg mr-3">
                            <i class="fas fa-blog text-white text-xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white">MonBlog</h1>
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="flex items-center space-x-4">
                    <!-- État connecté -->
                    <div id="user-nav">
                        <div class="flex items-center space-x-4">
                            <a href="index.html" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md">
                                <i class="fas fa-home mr-2"></i>
                                Accueil
                            </a>
                            <a href="/dashboard" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                Dashboard
                            </a>
                            <button onclick="logout()" class="bg-indigo-800 hover:bg-indigo-900 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Déconnexion
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Bouton retour -->
        <div class="mb-6">
            <a href="/" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 transition duration-300">
                <i class="fas fa-arrow-left mr-2"></i>
                Retour aux articles
            </a>
        </div>

        <!-- Article -->
        <article class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700 mb-8">
            <div class="p-8">
                <!-- En-tête de l'article -->
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <span class="bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-full">Technologie</span>
                        <span class="text-gray-300 text-sm ml-4">8 min de lecture</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-400 hover:text-indigo-400 transition duration-300">
                            <i class="far fa-bookmark text-xl"></i>
                        </button>
                        <button class="text-gray-400 hover:text-indigo-400 transition duration-300">
                            <i class="far fa-share-square text-xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Titre et métadonnées -->
                <h1 class="text-4xl font-bold text-white mb-4">L'avenir du développement web : Les tendances 2024</h1>
                
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-indigo-700 rounded-full flex items-center justify-center text-white mr-4">
                        <i class="fas fa-user text-lg"></i>
                    </div>
                    <div>
                        <p class="text-white font-medium">Alex Martin</p>
                        <p class="text-gray-400 text-sm">Publié le 15 janvier 2024</p>
                    </div>
                </div>

                <!-- Image de l'article -->
                <div class="mb-8 rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Développement web" 
                         class="w-full h-64 object-cover">
                </div>

                <!-- Contenu de l'article -->
                <div class="prose prose-lg max-w-none">
                    <div class="text-gray-200 space-y-6">
                        <p class="text-xl leading-relaxed">
                            Le développement web évolue à une vitesse vertigineuse. En 2024, nous assistons à l'émergence de nouvelles technologies et méthodologies qui redéfinissent complètement notre façon de construire des expériences en ligne.
                        </p>

                        <h2 class="text-2xl font-bold text-white mt-8 mb-4">L'IA intégrée au développement</h2>
                        <p>
                            L'intelligence artificielle n'est plus une option mais une nécessité. Les outils comme GitHub Copilot et ChatGPT transforment la façon dont nous écrivons le code. Les développeurs peuvent maintenant générer du code, déboguer et optimiser leurs applications avec une assistance IA en temps réel.
                        </p>

                        <div class="bg-indigo-900/30 border-l-4 border-indigo-500 p-6 rounded-r-lg my-6">
                            <p class="text-indigo-200 italic">
                                "L'IA ne remplacera pas les développeurs, mais les développeurs qui utilisent l'IA remplaceront ceux qui ne le font pas."
                            </p>
                        </div>

                        <h2 class="text-2xl font-bold text-white mt-8 mb-4">Le Jamstack et l'edge computing</h2>
                        <p>
                            L'architecture Jamstack continue de gagner en popularité grâce à ses performances exceptionnelles et sa sécurité améliorée. Combinée avec l'edge computing, elle permet de déployer des applications plus rapides que jamais, avec des temps de chargement réduits de plus de 50%.
                        </p>

                        <h2 class="text-2xl font-bold text-white mt-8 mb-4">Les Web Components</h2>
                        <p>
                            La standardisation des composants web permet maintenant de créer des bibliothèques de composants réutilisables indépendantes des frameworks. Cette approche favorise la maintenance à long terme et réduit la dette technique.
                        </p>

                        <h2 class="text-2xl font-bold text-white mt-8 mb-4">L'accessibilité comme priorité</h2>
                        <p>
                            2024 marque un tournant décisif pour l'accessibilité web. Les réglementations se durcissent et les utilisateurs attendent des expériences inclusives. Les développeurs doivent maintenant intégrer l'accessibilité dès la conception, et non plus comme une réflexion après coup.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                            <div class="bg-indigo-900/20 p-6 rounded-lg">
                                <h3 class="text-white font-bold mb-2">À retenir</h3>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-indigo-400 mr-2 mt-1"></i>
                                        L'IA devient un assistant indispensable
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-indigo-400 mr-2 mt-1"></i>
                                        Performance et sécurité avant tout
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-indigo-400 mr-2 mt-1"></i>
                                        Accessibilité non-négociable
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-indigo-900/20 p-6 rounded-lg">
                                <h3 class="text-white font-bold mb-2">Outils populaires</h3>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-indigo-400 mr-2 mt-1"></i>
                                        Next.js 14 et React Server Components
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-indigo-400 mr-2 mt-1"></i>
                                        Vue 3 avec Composition API
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-indigo-400 mr-2 mt-1"></i>
                                        SvelteKit et SolidJS
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-lg font-medium text-white">
                            En conclusion, l'avenir du développement web s'annonce passionnant. Les développeurs qui s'adapteront à ces changements et continueront d'apprendre seront ceux qui façonneront le web de demain.
                        </p>
                    </div>
                </div>

                <!-- Tags et interactions -->
                <div class="flex flex-wrap items-center justify-between mt-8 pt-6 border-t border-gray-700">
                    <div class="flex flex-wrap gap-2 mb-4 md:mb-0">
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">Web Development</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">JavaScript</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">IA</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">Trends 2024</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-400">
                        <button class="flex items-center space-x-2 hover:text-indigo-400 transition duration-300">
                            <i class="far fa-heart"></i>
                            <span>42</span>
                        </button>
                        <button class="flex items-center space-x-2 hover:text-indigo-400 transition duration-300">
                            <i class="far fa-comment"></i>
                            <span>8</span>
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section commentaires -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-white">
                    <i class="fas fa-comments mr-3 gradient-text"></i>
                    Commentaires <span class="text-indigo-400">(8)</span>
                </h2>
                <button class="text-indigo-400 hover:text-indigo-300 transition duration-300 flex items-center">
                    <i class="fas fa-sort mr-2"></i>
                    Trier par
                </button>
            </div>

            <!-- Formulaire de commentaire -->
            <div class="comment-card rounded-2xl p-6 mb-6 border border-gray-700">
                <h3 class="text-white font-bold mb-4">Laisser un commentaire</h3>
                <form id="comment-form">
                    <div class="mb-4">
                        <textarea 
                            id="comment-text" 
                            rows="4" 
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-300"
                            placeholder="Partagez vos pensées..."
                        ></textarea>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-indigo-700 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="text-white">Alex Martin</span>
                        </div>
                        <button 
                            type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-300 flex items-center shadow-md"
                        >
                            <i class="fas fa-paper-plane mr-2"></i>
                            Publier
                        </button>
                    </div>
                </form>
            </div>

            <!-- Liste des commentaires -->
            <div id="comments-list" class="space-y-6">
                <!-- Les commentaires seront générés dynamiquement ici -->
            </div>

            <!-- Charger plus de commentaires -->
            <div class="text-center mt-8">
                <button class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300 border border-gray-700">
                    <i class="fas fa-spinner mr-2"></i>
                    Charger plus de commentaires
                </button>
            </div>
        </section>

        <!-- Articles similaires -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-white mb-6">
                <i class="fas fa-newspaper mr-3 gradient-text"></i>
                Articles similaires
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Articles similaires -->
                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Technologie</span>
                            <span class="text-white text-sm">6 min</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">React vs Vue en 2024</h3>
                        <p class="text-gray-200 mb-4 line-clamp-3">Comparaison détaillée des deux frameworks les plus populaires...</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <span class="text-gray-300">Marie Dubois</span>
                            <span class="text-gray-400">12 Jan</span>
                        </div>
                    </div>
                </div>

                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">IA</span>
                            <span class="text-white text-sm">10 min</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">L'IA générative en production</h3>
                        <p class="text-gray-200 mb-4 line-clamp-3">Comment intégrer l'IA générative dans vos applications...</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <span class="text-gray-300">Thomas Leroy</span>
                            <span class="text-gray-400">8 Jan</span>
                        </div>
                    </div>
                </div>

                <div class="post-card rounded-2xl overflow-hidden shadow-lg border border-gray-700">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-indigo-700 text-white text-xs font-medium px-3 py-1 rounded-full">Performance</span>
                            <span class="text-white text-sm">7 min</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Optimisation Core Web Vitals</h3>
                        <p class="text-gray-200 mb-4 line-clamp-3">Guide complet pour améliorer vos scores de performance...</p>
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-gray-600">
                            <span class="text-gray-300">Sophie Martin</span>
                            <span class="text-gray-400">5 Jan</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800">
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

    <script>
        // Données des commentaires
        const comments = [
            {
                id: 1,
                author: "Marie Dubois",
                avatar: "MD",
                content: "Excellent article ! Je trouve particulièrement intéressant le point sur l'accessibilité. Trop souvent négligée, elle devient effectivement cruciale.",
                date: "2024-01-15 14:30",
                likes: 5,
                replies: [
                    {
                        id: 11,
                        author: "Alex Martin",
                        avatar: "AM",
                        content: "Merci Marie ! L'accessibilité est effectivement un sujet qui me tient particulièrement à cœur.",
                        date: "2024-01-15 15:45",
                        likes: 3
                    }
                ]
            },
            {
                id: 2,
                author: "Thomas Leroy",
                avatar: "TL",
                content: "Très bon résumé des tendances. Je suis curieux de voir comment l'IA va évoluer dans nos outils de développement quotidien.",
                date: "2024-01-15 16:20",
                likes: 2,
                replies: []
            },
            {
                id: 3,
                author: "Sophie Martin",
                avatar: "SM",
                content: "Le Jamstack est effectivement l'avenir. Nous l'avons adopté dans notre entreprise et les résultats sont impressionnants en termes de performance.",
                date: "2024-01-16 09:15",
                likes: 4,
                replies: [
                    {
                        id: 31,
                        author: "Pierre Moreau",
                        avatar: "PM",
                        content: "Entièrement d'accord ! Les temps de chargement ont été divisés par 3 chez nous.",
                        date: "2024-01-16 10:30",
                        likes: 2
                    }
                ]
            }
        ];

        // Fonction pour afficher les commentaires
        function displayComments() {
            const commentsList = document.getElementById('comments-list');
            
            commentsList.innerHTML = comments.map(comment => `
                <div class="comment-card rounded-2xl p-6 border border-gray-700">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-700 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                            ${comment.avatar}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <div>
                                    <span class="text-white font-medium">${comment.author}</span>
                                    <span class="text-gray-400 text-sm ml-3">${new Date(comment.date).toLocaleString('fr-FR')}</span>
                                </div>
                                <button class="text-gray-400 hover:text-indigo-400 transition duration-300">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                            <p class="text-gray-200 mb-4">${comment.content}</p>
                            <div class="flex items-center space-x-4 text-gray-400">
                                <button class="flex items-center space-x-1 hover:text-indigo-400 transition duration-300">
                                    <i class="far fa-heart"></i>
                                    <span class="text-sm">${comment.likes}</span>
                                </button>
                                <button class="flex items-center space-x-1 hover:text-indigo-400 transition duration-300 reply-btn" data-comment-id="${comment.id}">
                                    <i class="far fa-comment"></i>
                                    <span class="text-sm">Répondre</span>
                                </button>
                            </div>

                            <!-- Réponses -->
                            ${comment.replies.length > 0 ? `
                                <div class="mt-4 ml-8 space-y-4">
                                    ${comment.replies.map(reply => `
                                        <div class="flex items-start space-x-3">
                                            <div class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold flex-shrink-0">
                                                ${reply.avatar}
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between mb-1">
                                                    <span class="text-white font-medium text-sm">${reply.author}</span>
                                                    <span class="text-gray-400 text-xs">${new Date(reply.date).toLocaleString('fr-FR')}</span>
                                                </div>
                                                <p class="text-gray-300 text-sm">${reply.content}</p>
                                                <div class="flex items-center space-x-3 mt-2">
                                                    <button class="text-gray-400 hover:text-indigo-400 transition duration-300 text-xs">
                                                        <i class="far fa-heart"></i>
                                                        <span>${reply.likes}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    `).join('')}
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `).join('');

            // Ajouter les écouteurs d'événements pour les boutons de réponse
            document.querySelectorAll('.reply-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const commentId = this.getAttribute('data-comment-id');
                    const commentText = document.getElementById('comment-text');
                    const comment = comments.find(c => c.id == commentId);
                    commentText.value = `@${comment.author} `;
                    commentText.focus();
                });
            });
        }

        // Gestion du formulaire de commentaire
        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const commentText = document.getElementById('comment-text').value.trim();
            
            if (commentText) {
                // Ajouter le nouveau commentaire
                const newComment = {
                    id: comments.length + 1,
                    author: "Alex Martin",
                    avatar: "AM",
                    content: commentText,
                    date: new Date().toISOString(),
                    likes: 0,
                    replies: []
                };
                
                comments.unshift(newComment);
                displayComments();
                document.getElementById('comment-text').value = '';
                
                // Afficher un message de succès
                showNotification('Commentaire publié avec succès !');
            }
        });

        // Fonction pour afficher les notifications
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
            notification.textContent = message;
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);

            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Fonction de déconnexion
        function logout() {
            if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
                window.location.href = 'index.html';
            }
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            displayComments();
        });
    </script>
</body>
</html>