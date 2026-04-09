<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - Cometalink</title>
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
</head>

<body class="font-sans antialiased text-gray-800 bg-[#FFFFFF]">

    <header class="bg-brand-yellow text-gray-900">
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
                <a href="{{ url('/nosotros') }}" class="text-brand-green transition">Nosotros</a>
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
    </header>

    <section class="bg-[#008F4C] text-[#FFFFFF] py-20 px-6 lg:px-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Conectando a México <br>
                    <span class="text-[#FFB800]">desde 2018</span>
                </h1>
                <p class="text-lg mb-10 opacity-90 leading-relaxed">
                    Somos líderes en servicios de internet fiber optic, comprometidos con llevar conectividad de alta velocidad a hogares, negocios y gamers en todo el país.
                </p>
                <div class="flex space-x-8 text-center lg:text-left">
                    <div>
                        <p class="text-3xl font-bold text-[#FFB800]">50K+</p>
                        <p class="text-sm opacity-80">Clientes</p>
                    </div>
                    <div class="w-px bg-[#FFFFFF] opacity-20"></div>
                    <div>
                        <p class="text-3xl font-bold text-[#FFB800]">50+</p>
                        <p class="text-sm opacity-80">Ciudades</p>
                    </div>
                    <div class="w-px bg-[#FFFFFF] opacity-20"></div>
                    <div>
                        <p class="text-3xl font-bold text-[#FFB800]">99.9%</p>
                        <p class="text-sm opacity-80">Uptime</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                    <svg class="w-8 h-8 text-[#FFB800] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                    <h3 class="font-bold text-lg">Red Nacional</h3>
                    <p class="text-sm opacity-80">2000+ km de fibra</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                    <svg class="w-8 h-8 text-[#FFB800] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                    <h3 class="font-bold text-lg">Data Centers</h3>
                    <p class="text-sm opacity-80">4 puntos de intercambio</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                    <svg class="w-8 h-8 text-[#FFB800] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.965 11.965 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <h3 class="font-bold text-lg">Seguridad</h3>
                    <p class="text-sm opacity-80">Certificación ISO 27001</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                    <svg class="w-8 h-8 text-[#FFB800] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <h3 class="font-bold text-lg">Equipo</h3>
                    <p class="text-sm opacity-80">200+ técnicos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 lg:px-24 bg-gray-50">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-[#FFFFFF] p-10 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-14 h-14 bg-green-50 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#008F4C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-4 text-[#008F4C]">Nuestra Misión</h2>
                <p class="text-gray-600 leading-relaxed">
                    Proporcionar acceso a internet de alta velocidad, confiable y accesible, empoderando a familias, empresas y comunidades para conectarse, crecer y prosperar en la era digital. Nos comprometemos a eliminar la brecha digital en México ofreciendo tecnología de vanguardia a precios justos.
                </p>
            </div>
            <div class="bg-[#FFFFFF] p-10 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-14 h-14 bg-yellow-50 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-4 text-[#008F4C]">Nuestra Visión</h2>
                <p class="text-gray-600 leading-relaxed">
                    Ser el proveedor de internet líder en México, reconocido por la excelencia en servicio, innovación tecnológica y compromiso con nuestros clientes. Para 2030, aspiramos a conectar a más de 200,000 hogares y empresas con tecnología fiber optic de última generación, contribuyendo al desarrollo digital del país.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 lg:px-24 bg-[#FFFFFF]">
        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-[#008F4C]">Infraestructura de Vanguardia</h2>
            <p class="text-gray-600">Nuestra red está construida con tecnología de última generación para garantizar la mejor experiencia de conexión</p>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#008F4C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Cobertura Nacional</h3>
                <p class="text-sm text-gray-500">Más de 50 ciudades conectadas con infraestructura fiber optic de última generación.</p>
            </div>
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-yellow-50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Tecnología de Punta</h3>
                <p class="text-sm text-gray-500">Equipamiento de última generación con redes GPON y capacidad de hasta 10Gbps.</p>
            </div>
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#008F4C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.965 11.965 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">SLA Garantizado</h3>
                <p class="text-sm text-gray-500">99.9% de uptime con compensación automática por fallas de servicio.</p>
            </div>
            <div class="p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-yellow-50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Equipo Certificado</h3>
                <p class="text-sm text-gray-500">Técnicos certificados y equipo de soporte 24/7 para resolver cualquier incidencia.</p>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-[#008F4C]">Nuestra Trayectoria</h2>
                <p class="text-gray-500">Más de 6 años de crecimiento e innovación constante</p>
            </div>

            <div class="relative border-l-2 border-[#D4AF37] ml-3 md:mx-auto md:border-l-0">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-[#D4AF37]"></div>

                <div class="mb-10 md:flex md:justify-between md:items-center w-full">
                    <div class="md:w-5/12 text-left md:text-right pr-8 relative">
                        <h3 class="text-xl font-bold text-[#008F4C]">2018</h3>
                        <h4 class="font-bold text-gray-800">Fundación</h4>
                        <p class="text-sm text-gray-500">Iniciamos operaciones en Ciudad de México</p>
                    </div>
                    <div class="absolute left-[-9px] md:left-1/2 md:transform md:-translate-x-1/2 w-5 h-5 bg-[#FFB800] rounded-full border-4 border-[#FFFFFF]"></div>
                    <div class="md:w-5/12 hidden md:block"></div>
                </div>

                <div class="mb-10 md:flex md:justify-between md:items-center w-full">
                    <div class="md:w-5/12 hidden md:block"></div>
                    <div class="absolute left-[-9px] md:left-1/2 md:transform md:-translate-x-1/2 w-5 h-5 bg-[#FFB800] rounded-full border-4 border-[#FFFFFF]"></div>
                    <div class="md:w-5/12 text-left pl-8 relative">
                        <h3 class="text-xl font-bold text-[#008F4C]">2019</h3>
                        <h4 class="font-bold text-gray-800">Expansión</h4>
                        <p class="text-sm text-gray-500">Llegamos a 10 ciudades principales</p>
                    </div>
                </div>

                <div class="mb-10 md:flex md:justify-between md:items-center w-full">
                    <div class="md:w-5/12 text-left md:text-right pr-8 relative">
                        <h3 class="text-xl font-bold text-[#008F4C]">2021</h3>
                        <h4 class="font-bold text-gray-800">Innovación</h4>
                        <p class="text-sm text-gray-500">Lanzamos planes Gamer de baja latencia</p>
                    </div>
                    <div class="absolute left-[-9px] md:left-1/2 md:transform md:-translate-x-1/2 w-5 h-5 bg-[#FFB800] rounded-full border-4 border-[#FFFFFF]"></div>
                    <div class="md:w-5/12 hidden md:block"></div>
                </div>

                <div class="mb-10 md:flex md:justify-between md:items-center w-full">
                    <div class="md:w-5/12 hidden md:block"></div>
                    <div class="absolute left-[-9px] md:left-1/2 md:transform md:-translate-x-1/2 w-5 h-5 bg-[#FFB800] rounded-full border-4 border-[#FFFFFF]"></div>
                    <div class="md:w-5/12 text-left pl-8 relative">
                        <h3 class="text-xl font-bold text-[#008F4C]">2022</h3>
                        <h4 class="font-bold text-gray-800">Crecimiento</h4>
                        <p class="text-sm text-gray-500">50,000+ clientes activos</p>
                    </div>
                </div>

                <div class="mb-10 md:flex md:justify-between md:items-center w-full">
                    <div class="md:w-5/12 text-left md:text-right pr-8 relative">
                        <h3 class="text-xl font-bold text-[#008F4C]">2024</h3>
                        <h4 class="font-bold text-gray-800">Liderazgo</h4>
                        <p class="text-sm text-gray-500">Top 3 proveedores de internet en México</p>
                    </div>
                    <div class="absolute left-[-9px] md:left-1/2 md:transform md:-translate-x-1/2 w-5 h-5 bg-[#FFB800] rounded-full border-4 border-[#FFFFFF]"></div>
                    <div class="md:w-5/12 hidden md:block"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-[#FFFFFF]">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-16 text-[#008F4C]">Nuestros Valores</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div>
                    <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#008F4C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.965 11.965 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Confianza</h3>
                    <p class="text-gray-500 text-sm">Construimos relaciones duraderas con transparencia y honestidad en cada interacción.</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-yellow-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Innovación</h3>
                    <p class="text-gray-500 text-sm">Constantemente evolucionamos para ofrecer la mejor tecnología a nuestros clientes.</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#008F4C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Servicio</h3>
                    <p class="text-gray-500 text-sm">La satisfacción del cliente es nuestra prioridad número uno.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#008F4C] py-16 px-6 text-center text-[#FFFFFF]">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Quieres formar parte de la comunidad Cometalink?</h2>
            <p class="mb-8 text-lg opacity-90">Contáctanos y descubre por qué miles de mexicanos confían en nosotros.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ url('/planes') }}" class="bg-[#D4AF37] hover:bg-[#FFB800] text-[#FFFFFF] font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 flex items-center">
                    Ver Planes
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="font-medium">800-123-4567</span>
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
                    <a href="https://www.facebook.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="opacity-80 hover:text-brand-green transition"><i class="fa-brands fa-twitter text-lg"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6 text-brand-yellow">Links Rápidos</h4>
                <ul class="space-y-3 text-sm opacity-80 font-medium">
                    <li><a href="{{ url('/') }}" class="hover:text-brand-yellow transition">Inicio</a></li>
                    <li><a href="{{ url('/planes') }}" class="hover:text-brand-yellow transition">Planes y Tarifas</a></li>
                    <li><a href="{{ url('/cobertura') }}" class="hover:text-brand-yellow transition">Verificar Cobertura</a></li>
                    <li><a href="{{ url('/soporte') }}" class="hover:text-brand-yellow transition">Centro de Soporte</a></li>
                    <li><a href="{{ url('/nosotros') }}" class="hover:text-brand-yellow transition">Nosotros</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6 text-brand-yellow">Planes</h4>
                <ul class="space-y-3 text-sm opacity-80 font-medium">
                    <li><a href="{{ url('/planes') }}" class="hover:text-brand-yellow transition">Internet Hogar</a></li>
                    <li><a href="{{ url('/planes') }}" class="hover:text-brand-yellow transition">Internet Negocio</a></li>
                    <li><a href="{{ url('/planes') }}" class="hover:text-brand-yellow transition">Internet Gamer</a></li>
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

        <div class="container mx-auto px-6 border-t border-brand-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm opacity-60">
            <p>&copy; 2026 Cometalink. Todos los derechos reservados.</p>
            <div class="flex space-x-6 mt-4 md:mt-0 font-medium">
                <a href="#" class="hover:text-brand-yellow transition">Términos y Condiciones</a>
                <a href="#" class="hover:text-brand-yellow transition">Política de Privacidad</a>
            </div>
        </div>
    </footer>

</body>

</html>