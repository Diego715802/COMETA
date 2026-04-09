<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cometalink - Internet Rápido y Estable</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-green': '#008F4C',
                        'brand-yellow': '#ffb800',
                        'brand-gold': '#d4c737',
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

        .glass-card {
            background: rgba(0, 0, 0, 0.05);
            /* Ajustado para fondo claro */
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-brand-white text-gray-800 antialiased">

    <header class="bg-brand-yellow text-gray-900 pb-20 rounded-b-[4rem]">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Cometalink" class="h-8 w-auto">
                <span class="text-2xl font-bold">Cometalink</span>
            </div>
            <div class="hidden md:flex space-x-6 text-sm font-semibold">
                <a href="{{ url('/') }}" class="hover:text-brand-green transition">Inicio</a>
                <a href="{{ url('/planes') }}" class="hover:text-brand-green transition">Planes</a>
                <a href="{{ url('/cobertura') }}" class="hover:text-brand-green transition">Cobertura</a>
                <a href="{{ url('/soporte') }}" class="hover:text-brand-green transition">Soporte</a>
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

        <div class="container mx-auto px-6 mt-12 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center space-x-2 border border-gray-900/20 rounded-full px-4 py-1 mb-6 text-sm font-semibold">
                    <i class="fa-solid fa-check-circle text-brand-green"></i>
                    <span>Internet Fiber Optic de última generación</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
                    Internet Rápido y Estable para <span class="text-brand-green">Tu Hogar</span>
                </h1>
                <p class="text-lg opacity-90 mb-8 max-w-lg font-medium">
                    Conectamos tu vida con la mejor tecnología fiber optic. Velocidad simétrica, estabilidad garantizada y soporte 24/7.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/planes') }}" class="bg-brand-green text-brand-white px-8 py-3 rounded-md font-bold hover:bg-brand-dark transition flex items-center space-x-2">
                        <span>Ver Planes</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ url('/cobertura') }}" class="border-2 border-gray-900 text-gray-900 px-8 py-3 rounded-md font-bold hover:bg-gray-900 hover:text-brand-white transition">
                        Verificar Cobertura
                    </a>
                </div>
            </div>

            <div class="glass-card rounded-2xl p-8 space-y-6">
                <div class="bg-white/40 rounded-xl p-5 shadow-sm">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold opacity-80">Velocidad de descarga</span>
                        <i class="fa-solid fa-bolt text-brand-green"></i>
                    </div>
                    <div class="text-3xl font-bold mb-3">500 Mbps</div>
                    <div class="w-full bg-gray-900/10 rounded-full h-2">
                        <div class="bg-brand-green h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="bg-white/40 rounded-xl p-5 shadow-sm">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold opacity-80">Velocidad de carga</span>
                        <i class="fa-solid fa-bolt text-brand-green"></i>
                    </div>
                    <div class="text-3xl font-bold mb-3">500 Mbps</div>
                    <div class="w-full bg-gray-900/10 rounded-full h-2">
                        <div class="bg-brand-green h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="text-center text-sm font-semibold flex items-center justify-center space-x-2">
                    <i class="fa-solid fa-shield-halved text-brand-green"></i>
                    <span>99.9% Uptime Garantizado</span>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-bg-light">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Por qué elegir Cometalink?</h2>
            <p class="text-gray-600 mb-12">Nos diferenciamos por ofrecer la mejor experiencia de internet en México</p>

            <div class="grid md:grid-cols-4 gap-8 text-left">
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="bg-brand-yellow/20 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-bolt text-brand-yellow text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Velocidad Ultra</h3>
                    <p class="text-gray-600 text-sm">Conexiones de hasta 1Gbps para navegar, jugar y trabajar sin límites.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="bg-brand-yellow/20 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-shield text-brand-yellow text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Estabilidad Garantizada</h3>
                    <p class="text-gray-600 text-sm">Red fiber optic con 99.9% de uptime y latencia mínima.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="bg-brand-yellow/20 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-headset text-brand-yellow text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Soporte 24/7</h3>
                    <p class="text-gray-600 text-sm">Equipo técnico disponible las 24 horas para resolver cualquier incidencia.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="bg-brand-yellow/20 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-wifi text-brand-yellow text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sin Límites</h3>
                    <p class="text-gray-600 text-sm">Datos ilimitados sin restricciones de velocidad ni ancho de banda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-yellow text-gray-900 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">¿Listo para experimentar internet de alta velocidad?</h2>
            <p class="mb-10 text-lg font-medium opacity-90">Verifica nuestra cobertura en tu zona y contrata en minutos</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/cobertura') }}" class="bg-brand-green text-brand-white px-8 py-3 rounded-md font-bold hover:bg-brand-dark transition">
                    Verificar Cobertura
                </a>
                <a href="https://wa.me/525512338776" target="_blank" class="border-2 border-gray-900 text-gray-900 px-8 py-3 rounded-md font-bold hover:bg-gray-900 hover:text-brand-white transition">
                    Chatear en WhatsApp
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-bg-light">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Cómo contratar?</h2>
            <p class="text-gray-600 mb-16">En solo 4 pasos tendrás internet de alta velocidad en tu hogar</p>

            <div class="grid md:grid-cols-4 gap-8 relative text-left">
                <div class="hidden md:block absolute top-12 left-[15%] right-[15%] h-0.5 bg-gray-200 z-0"></div>

                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 relative z-10">
                    <div class="w-10 h-10 bg-brand-yellow text-gray-900 rounded-full flex items-center justify-center font-bold text-xl mb-6">1</div>
                    <h3 class="text-xl font-bold mb-3">Verifica tu cobertura</h3>
                    <p class="text-gray-600 text-sm">Ingresa tu dirección y confirma que llegamos a tu zona.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 relative z-10">
                    <div class="w-10 h-10 bg-brand-yellow text-gray-900 rounded-full flex items-center justify-center font-bold text-xl mb-6">2</div>
                    <h3 class="text-xl font-bold mb-3">Elige tu plan</h3>
                    <p class="text-gray-600 text-sm">Selecciona el paquete que mejor se adapte a tus necesidades.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 relative z-10">
                    <div class="w-10 h-10 bg-brand-yellow text-gray-900 rounded-full flex items-center justify-center font-bold text-xl mb-6">3</div>
                    <h3 class="text-xl font-bold mb-3">Agenda instalación</h3>
                    <p class="text-gray-600 text-sm">Un técnico profesional visitará tu hogar en 24-48 horas.</p>
                </div>
                <div class="bg-brand-white p-8 rounded-2xl shadow-sm border border-gray-100 relative z-10">
                    <div class="w-10 h-10 bg-brand-yellow text-gray-900 rounded-full flex items-center justify-center font-bold text-xl mb-6">4</div>
                    <h3 class="text-xl font-bold mb-3">¡Disfruta!</h3>
                    <p class="text-gray-600 text-sm">Conéctate y comienza a navegar a la máxima velocidad.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-brand-white pt-16 pb-8">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-10 mb-12">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Cometalink" class="h-8 w-auto">
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
                <h4 class="text-lg font-bold mb-6 text-brand-yellow">Contacto</h4>
                <ul class="space-y-4 text-sm opacity-80 font-medium">
                    <li class="flex items-start space-x-3">
                        <i class="fa-brands fa-whatsapp mt-1 text-brand-green text-lg"></i>
                        <div class="flex flex-col space-y-1">
                            <span><strong class="text-brand-white">Teotihuacán:</strong> <a href="https://wa.me/525512338776" class="hover:text-brand-yellow transition">+52 5512338776</a></span>
                            <span><strong class="text-brand-white">Hidalgo:</strong> <a href="https://wa.me/525512338776" class="hover:text-brand-yellow transition">+52 5512338776</a></span>
                        </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="fa-regular fa-envelope text-brand-green text-lg w-4 text-center"></i>
                        <a href="mailto:contacto@cometalink.mx" class="hover:text-brand-yellow transition">contacto@cometalink.mx</a>
                    </li>
                    <li class="flex items-start space-x-3 mt-2">
                        <i class="fa-solid fa-location-dot mt-1 text-brand-green text-lg w-4 text-center"></i>
                        <span>Teotihuacán e Hidalgo, México</span>
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