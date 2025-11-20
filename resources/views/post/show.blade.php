<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Blog | Test</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

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
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #028090 0%, #2D3142 100%);
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .tag {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .tag:hover {
            background-color: #2D3142 !important;
            color: white !important;
        }

        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: #028090;
            z-index: 9999;
            transition: width 0.3s;
        }
    </style>
</head>
<x-header />
<body class="bg-gray-100">

<section id="post1" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">
        <article class="bg-white rounded-2xl shadow-lg overflow-hidden p-8">

            
            <h2 class="text-3xl font-bold text-secondary mb-4">{{ $post->title }}</h2>

            <div class="flex items-center text-gray-600 mb-8">
                <div class="flex items-center mr-6">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-3">
                        JD
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">{{ $post->user->name }}</p>
                        <p class="text-sm">12 mai 2023 · 8 min de lecture</p>
                    </div>
                </div>

                
            </div>

            <div class="prose max-w-none text-gray-700 mb-8">
                <p class="text-lg mb-4">
                    {{ $post->content }}
                </p>

            </div>

            <!-- Commentaires -->

            @forelse ($post->comments as $comment)
                      
            
            <div class="border-t border-gray-200 pt-8 mb-8">
                <h3 class="text-xl font-bold text-secondary mb-6">Commentaires ({{ $post->comments->count() }})</h3>

                <div class="bg-gray-50 rounded-xl p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white text-sm font-bold mr-3">AL</div>
                            <div>
                                <p class="font-medium text-gray-800">{{ $comment->user->name }}</p>
                                <p class="text-xs text-gray-500">13 mai 2023</p>
                            </div>
                        </div>
                        <button class="text-gray-500 hover:text-primary transition-colors">
                            <i class="far fa-heart"></i> <span class="ml-1">3</span>
                        </button>
                    </div>
                    <p class="text-gray-700">{{ $comment->content }}</p>
                </div>
                @empty
                @endforelse

                

                <!-- Formulaire commentaire -->
                <form class="mt-8" method="POST" action="{{ route('comments.store', $post->id) }}"> 
                    @csrf
                    @method('POST')
                    <h4 class="text-lg font-medium text-secondary mb-4">Ajouter un commentaire</h4>


                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700 font-medium">Commentaire</label>
                        <textarea rows="4" name="content" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition-colors font-medium">Publier le commentaire</button>
                </form>
            </div>

            <div class="text-center mt-8">
                <a href="#posts" class="inline-flex items-center text-primary font-medium hover:text-secondary transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Retour aux articles
                </a>
            </div>

        </article>
    </div>
</section>
    <x-footer />
</body>
</html>
