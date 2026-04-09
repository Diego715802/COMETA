<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cometalink - Soporte Técnico</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-green': '#008F4C',
                        'brand-yellow': '#FFB800',
                        'brand-gold': '#D4AF37',
                        'brand-white': '#FFFFFF',
                        'brand-dark': '#006133',
                        'bg-light': '#F8F9FA'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-brand-white text-gray-800 antialiased">

    <header class="bg-brand-yellow text-gray-900 pb-12 rounded-b-[4rem]">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-wifi text-2xl text-brand-green"></i>
                <span class="text-2xl font-bold">Cometalink</span>
            </div>
            <div class="hidden md:flex space-x-6 text-sm font-semibold">
                <a href="{{ url('/') }}" class="hover:text-brand-green transition">Inicio</a>
                <a href="{{ url('/planes') }}" class="hover:text-brand-green transition">Planes</a>
                <a href="{{ url('/cobertura') }}" class="hover:text-brand-green transition">Cobertura</a>
                <a href="{{ url('/soporte') }}" class="text-brand-green transition">Soporte</a>
                <a href="{{ url('/nosotros') }}" class="hover:text-brand-green transition">Nosotros</a>
                <a href="{{ url('/blog') }}" class="hover:text-brand-green transition">Blog</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://wa.me/525512338776" target="_blank" class="hidden md:flex items-center space-x-1 hover:text-brand-green transition">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>Escríbenos</span>
                </a>
                <a href="{{ url('/contratar') }}" class="bg-brand-green text-brand-white px-6 py-2 rounded-md font-bold hover:bg-brand-dark transition">
                    Contratar ahora
                </a>
            </div>
        </nav>

        <div class="container mx-auto px-6 mt-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Estamos aquí para <span class="text-brand-green">ayudarte</span></h1>
            <p class="text-lg opacity-90 font-medium">Centro de ayuda y soporte técnico 24/7</p>
        </div>
    </header>

    <section class="py-16 bg-[#F8F9FA]">
        <div class="container mx-auto px-6 max-w-5xl text-center">
            <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                <i class="fa-regular fa-circle-question"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#111827]">Centro de Soporte</h2>
            <p class="text-gray-500 mb-10 max-w-2xl mx-auto">Encuentra respuestas rápidas o contacta directamente a nuestro equipo.</p>

            <div class="grid md:grid-cols-3 gap-6 text-left">
                <a href="https://wa.me/525512338776" target="_blank" class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center space-x-4 hover:shadow-md transition cursor-pointer">
                    <div class="w-12 h-12 bg-green-50 text-green-500 rounded-full flex items-center justify-center text-2xl">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">WhatsApp</h4>
                        <p class="text-sm text-gray-500">Respuesta inmediata</p>
                    </div>
                </a>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center space-x-4">
                    <div class="w-12 h-12 bg-sky-50 text-sky-500 rounded-full flex items-center justify-center text-xl">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Línea 800</h4>
                        <p class="text-sm text-gray-500">800-123-4567</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gray-50 text-gray-500 rounded-full flex items-center justify-center text-xl">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Email</h4>
                        <p class="text-sm text-gray-500">soporte@cometalink.mx</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-5xl">

            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-6 text-[#111827]">Preguntas Frecuentes</h3>
                <div class="space-y-3">
                    <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center bg-white cursor-pointer hover:border-gray-300 transition">
                        <div class="flex items-center space-x-4">
                            <span class="bg-sky-50 text-sky-600 text-xs font-semibold px-3 py-1 rounded-md">Soporte técnico</span>
                            <span class="font-medium text-gray-800 text-sm md:text-base">¿Cómo puedo reportar una falla en mi internet?</span>
                        </div>
                        <i class="fa-solid fa-chevron-down text-gray-400"></i>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center bg-white cursor-pointer hover:border-gray-300 transition">
                        <div class="flex items-center space-x-4">
                            <span class="bg-cyan-50 text-cyan-600 text-xs font-semibold px-3 py-1 rounded-md">Instalación</span>
                            <span class="font-medium text-gray-800 text-sm md:text-base">¿Cuál es el tiempo de instalación después de contratar?</span>
                        </div>
                        <i class="fa-solid fa-chevron-down text-gray-400"></i>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center bg-white cursor-pointer hover:border-gray-300 transition">
                        <div class="flex items-center space-x-4">
                            <span class="bg-sky-50 text-sky-600 text-xs font-semibold px-3 py-1 rounded-md">Conexión</span>
                            <span class="font-medium text-gray-800 text-sm md:text-base">¿Qué hacer si mi internet está lento?</span>
                        </div>
                        <i class="fa-solid fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-center space-x-3 mb-2">
                    <i class="fa-regular fa-file-lines text-[#0284c7] text-xl"></i>
                    <h3 class="text-2xl font-bold text-[#111827]">Envíanos un mensaje</h3>
                </div>
                <p class="text-gray-500 mb-6 text-sm">¿No encontraste la respuesta? Envíanos un mensaje y nuestro equipo te contactará.</p>

                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nombre completo</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-user text-gray-400"></i>
                                </div>
                                <input type="text" placeholder="Tu nombre" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7]">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Correo electrónico</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" placeholder="tu@email.com" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7]">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                        <textarea rows="4" placeholder="¿En qué podemos ayudarte?" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#0284c7] hover:bg-[#0369a1] text-white font-medium py-3 rounded-lg flex items-center justify-center space-x-2 transition">
                        <i class="fa-regular fa-paper-plane"></i>
                        <span>Enviar mensaje</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-brand-white pt-16 pb-8">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-10 mb-12">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <i class="fa-solid fa-wifi text-2xl text-brand-green"></i>
                    <span class="text-2xl font-bold">Cometalink</span>
                </div>
                <p class="text-sm opacity-80 mb-6 leading-relaxed">
                    Proveedor líder de servicios de internet en México. Conectamos hogares, negocios y gamers con la mejor velocidad y estabilidad.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6">Links Rápidos</h4>
                <ul class="space-y-3 text-sm opacity-80">
                    <li><a href="{{ url('/') }}" class="hover:text-brand-green transition">Inicio</a></li>
                    <li><a href="{{ url('/planes') }}" class="hover:text-brand-green transition">Planes y Tarifas</a></li>
                    <li><a href="{{ url('/cobertura') }}" class="hover:text-brand-green transition">Verificar Cobertura</a></li>
                    <li><a href="{{ url('/soporte') }}" class="hover:text-brand-green transition">Centro de Soporte</a></li>
                    <li><a href="{{ url('/nosotros') }}" class="hover:text-brand-green transition">Nosotros</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6">Planes</h4>
                <ul class="space-y-3 text-sm opacity-80">
                    <li><a href="{{ url('/planes#hogar') }}" class="hover:text-brand-green transition">Internet Hogar</a></li>
                    <li><a href="{{ url('/planes#negocio') }}" class="hover:text-brand-green transition">Internet Negocio</a></li>
                    <li><a href="{{ url('/planes#gamer') }}" class="hover:text-brand-green transition">Internet Gamer</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6">Contacto</h4>
                <ul class="space-y-4 text-sm opacity-80">
                    <li class="flex items-start space-x-3">
                        <i class="fa-solid fa-phone mt-1"></i>
                        <span>+52 (55) 1234-5678</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fa-regular fa-envelope mt-1"></i>
                        <span>contacto@cometalink.mx</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fa-solid fa-location-dot mt-1"></i>
                        <span>Ciudad de México, México</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto px-6 border-t border-brand-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-sm opacity-60">
            <p>&copy; 2026 Cometalink. Todos los derechos reservados.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-brand-green transition">Términos y Condiciones</a>
                <a href="#" class="hover:text-brand-green transition">Política de Privacidad</a>
            </div>
        </div>
    </footer>

</body>

</html>