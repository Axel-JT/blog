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
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .tag {
            transition: all 0.2s ease;
        }
        .tag:hover {
            background-color: #2D3142 !important;
            color: white;
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



<section id="posts" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-secondary mb-4">Articles récents</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Découvrez les dernières publications de notre communauté</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Article 1 -->

                    @foreach ($posts as $post)
                        
                   
                    <article class="bg-gray-50 rounded-xl overflow-hidden shadow-md card-hover border border-gray-500">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm font-medium text-primary">{{$post->title}}</span>
                                <span class="text-xs text-gray-500">12 mai 2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-3">
                                <a href="#post1" class="hover:text-primary transition-colors">{{$post->title}}</a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{$post->content}}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-sm font-bold mr-2">JD</div>
                                    <span class="text-sm text-gray-700">{{$post->user->name}}</span>
                                </div>
                                <a href="#post1" class="text-primary hover:text-secondary text-sm font-medium flex items-center">
                                    Lire <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article> 
                    
                    @endforeach

                   
                </div> 
               

                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center text-primary font-medium hover:text-secondary transition-colors">
                        Voir tous les articles <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div> 
           
        </section>

        <x-footer />