<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cometalink - Cobertura Interactiva</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

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
            scroll-behavior: smooth;
        }

        #mapa-cobertura {
            z-index: 10;
        }

        .leaflet-div-icon {
            background: transparent;
            border: none;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>

<body class="bg-bg-light text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="bg-brand-yellow text-gray-900 shadow-md relative z-50">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2 hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('logo.png') }}" alt="Logo Cometalink" class="h-8 w-auto">
                <span class="text-2xl font-bold">Cometalink</span>
            </div>
            <div class="hidden md:flex space-x-6 text-sm font-semibold">
                <a href="{{ url('/') }}" class="hover:text-brand-green transition">Inicio</a>
                <a href="{{ url('/planes') }}" class="hover:text-brand-green transition">Planes</a>
                <a href="{{ url('/cobertura') }}" class="text-brand-green transition border-b-2 border-brand-green pb-1">Cobertura</a>
                <a href="{{ url('/soporte') }}" class="hover:text-brand-green transition">Soporte</a>
                <a href="{{ url('/nosotros') }}" class="hover:text-brand-green transition">Nosotros</a>
                <a href="{{ url('/blog') }}" class="hover:text-brand-green transition">Blog</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://wa.me/525512338776" target="_blank" class="hidden md:flex items-center space-x-1 hover:text-brand-green transition">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>Escríbenos</span>
                </a>
                <a href="{{ url('/contratar') }}" class="bg-brand-green text-brand-white px-5 py-2 rounded-md font-bold hover:bg-brand-dark hover:-translate-y-0.5 transition-all duration-300 shadow-sm text-sm">
                    Contratar ahora
                </a>
            </div>
        </nav>
    </header>

    <main class="flex-grow flex flex-col items-center pb-16 relative z-10">

        <div class="w-full bg-white border-b border-gray-200 shadow-sm pb-8 pt-8 mb-10 text-center px-6">
            <div class="inline-flex items-center space-x-2 bg-brand-green/10 text-brand-green rounded-full px-4 py-1 mb-4 text-sm font-bold">
                <i class="fa-solid fa-satellite-dish animate-pulse"></i>
                <span>Red Inalámbrica 360°</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-extrabold leading-tight mb-2 text-gray-900">
                Mapa de Cobertura Activa
            </h1>
            <p class="text-base font-medium text-gray-500 max-w-2xl mx-auto mt-2">
                Busca por calle, municipio o código postal para verificar si tu ubicación está dentro del radio de 4 kilómetros.
            </p>
        </div>

        <div class="container mx-auto px-6 max-w-7xl w-full">

            <div class="grid lg:grid-cols-3 gap-6 h-[650px]">

                <div class="lg:col-span-1 bg-white rounded-2xl shadow-lg border border-gray-100 flex flex-col overflow-hidden h-[600px] lg:h-full">

                    <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-house-signal text-brand-green"></i> Validar Domicilio
                        </h2>
                        <div class="flex gap-2">
                            <div class="relative flex-grow">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-location-dot text-gray-400"></i>
                                </div>
                                <input type="text" id="search-zone" class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-green focus:border-transparent transition-all shadow-sm text-sm" placeholder="Ej: Hidalgo 12, Teotihuacán, 55800" onkeypress="if(event.key === 'Enter') buscarDireccion()">
                            </div>
                            <button onclick="buscarDireccion()" class="bg-brand-green text-white px-4 py-2.5 rounded-xl font-bold hover:bg-brand-dark transition-colors shadow-sm text-sm flex items-center gap-2">
                                Buscar
                            </button>
                        </div>
                        <p class="text-[11px] text-gray-400 mt-2"><i class="fa-solid fa-circle-info"></i> Sé específico agregando municipio y CP.</p>
                    </div>

                    <div id="zonas-list" class="flex-1 overflow-y-auto p-4 space-y-3 custom-scrollbar bg-white"></div>

                    <div class="p-5 border-t border-gray-100 bg-brand-green/5">
                        <a href="https://wa.me/525512338776" target="_blank" class="flex items-center justify-center gap-2 text-brand-green font-bold text-sm hover:text-brand-dark transition-colors">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>Atención a clientes</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden relative h-[500px] lg:h-full">
                    <div id="mapa-cobertura" class="w-full h-full"></div>
                </div>

            </div>
        </div>
    </main>

    <footer class="bg-brand-dark text-brand-white pt-16 pb-8 mt-auto z-20 relative">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-10 mb-12">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <img src="{{ asset('logo.png') }}" alt="Logo Cometalink" class="h-8 w-auto">
                    <span class="text-2xl font-bold">Cometalink</span>
                </div>
                <p class="text-sm opacity-80 mb-6 leading-relaxed">
                    Proveedor líder de servicios de internet en México. Conectamos hogares, negocios y gamers con la mejor velocidad y estabilidad.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/" target="_blank" class="opacity-80 hover:text-brand-yellow hover:-translate-y-1 transition-all"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="opacity-80 hover:text-brand-yellow hover:-translate-y-1 transition-all"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="opacity-80 hover:text-brand-yellow hover:-translate-y-1 transition-all"><i class="fa-brands fa-twitter text-lg"></i></a>
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
                            <span><strong class="text-brand-white">Hidalgo:</strong> <a href="https://wa.me/525512338776" class="hover:text-brand-yellow">5512338776</a></span>
                            <span><strong class="text-brand-white">Teotihuacán:</strong> <a href="https://wa.me/525512338776" class="hover:text-brand-yellow">5512338776</a></span>
                        </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="fa-regular fa-envelope text-brand-green text-lg w-4 text-center"></i>
                        <a href="mailto:contacto@cometalink.mx" class="hover:text-brand-yellow">contacto@cometalink.mx</a>
                    </li>
                    <li class="flex items-start space-x-3 mt-2">
                        <i class="fa-solid fa-location-dot mt-1 text-brand-green text-lg w-4 text-center"></i>
                        <span>Estado de México, México</span>
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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Variables globales
        let map, userMarker = null;
        const markers = [];
        const circles = [];

        // Datos de Antenas
        const antenas = [{
                id: 1,
                name: "Torre Oficina",
                lat: 19.689774,
                lng: -98.880593,
                municipio: "San Juan Teotihuacán",
                estado: "Estado de México",
                cp: "55800"
            },
            {
                id: 2,
                name: "Torre Calaveras",
                lat: 19.695367,
                lng: -98.900342,
                municipio: "San Martín de las Pirámides",
                estado: "Estado de México",
                cp: "55850"
            },
            {
                id: 3,
                name: "Torre Tlajinga",
                lat: 19.666025,
                lng: -98.859434,
                municipio: "San Juan Teotihuacán",
                estado: "Estado de México",
                cp: "55800"
            },
            {
                id: 4,
                name: "Torre Tecalco",
                lat: 19.673179,
                lng: -98.939685,
                municipio: "Tecámac",
                estado: "Estado de México",
                cp: "55740"
            },
            {
                id: 5,
                name: "Torre la Hormiga",
                lat: 19.681052,
                lng: -98.932805,
                municipio: "Tecámac",
                estado: "Estado de México",
                cp: "55749"
            },
            {
                id: 6,
                name: "Torre Suelas",
                lat: 19.706078,
                lng: -98.818016,
                municipio: "Otumba",
                estado: "Estado de México",
                cp: "55900"
            },
            {
                id: 7,
                name: "Torre Ahuatepec",
                lat: 19.681566,
                lng: -98.727364,
                municipio: "Otumba",
                estado: "Estado de México",
                cp: "55900"
            },
            {
                id: 8,
                name: "Torre Almoloya",
                lat: 20.015997,
                lng: -98.321228,
                municipio: "Almoloya",
                estado: "Hidalgo",
                cp: "43940"
            },
            {
                id: 9,
                name: "Torre La Palma",
                lat: 20.065916,
                lng: -98.282101,
                municipio: "Singuilucan",
                estado: "Hidalgo",
                cp: "43990"
            }
        ];

        document.addEventListener('DOMContentLoaded', function() {
            map = L.map('mapa-cobertura').setView([19.689774, -98.880593], 11);
            L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            const antennaIcon = L.divIcon({
                html: `<div class="flex items-center justify-center bg-white rounded-full shadow-lg border-2 border-brand-green text-brand-green hover:bg-brand-green hover:text-white transition-colors duration-300" style="width: 32px; height: 32px;">
                            <i class="fa-solid fa-satellite-dish text-sm"></i>
                       </div>`,
                className: 'leaflet-div-icon',
                iconSize: [32, 32],
                iconAnchor: [16, 16],
                popupAnchor: [0, -16]
            });

            antenas.forEach((ant, index) => {
                const circle = L.circle([ant.lat, ant.lng], {
                    radius: 4000,
                    color: '#008F4C',
                    weight: 1,
                    fillColor: '#008F4C',
                    fillOpacity: 0.05
                }).addTo(map);
                circles.push(circle);

                const marker = L.marker([ant.lat, ant.lng], {
                    icon: antennaIcon
                }).addTo(map);
                marker.bindPopup(`<div class="text-center p-1"><h4 class="font-bold text-gray-800">${ant.name}</h4><p class="text-xs text-gray-500">${ant.municipio}</p></div>`);
                markers.push(marker);

                marker.on('click', () => enfocarAntena(index));
            });

            mostrarListaOriginal();

            const group = new L.featureGroup(markers);
            map.fitBounds(group.getBounds().pad(0.1));
        });

        function mostrarListaOriginal() {
            const listContainer = document.getElementById('zonas-list');
            listContainer.innerHTML = `<h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2 mt-2 px-2">Antenas Activas</h3>`;

            antenas.forEach((ant, idx) => {
                const item = document.createElement('div');
                item.className = 'flex justify-between items-center bg-white p-3 rounded-xl border border-gray-100 hover:border-brand-green hover:shadow-md transition-all cursor-pointer group';
                item.innerHTML = `
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-brand-green/10 flex items-center justify-center text-brand-green group-hover:bg-brand-green group-hover:text-white transition-colors">
                            <i class="fa-solid fa-tower-broadcast text-xs"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm leading-tight">${ant.name}</h4>
                            <span class="text-[11px] text-gray-500">${ant.municipio}, CP: ${ant.cp}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
                `;
                item.onclick = () => enfocarAntena(idx);
                listContainer.appendChild(item);
            });
        }

        function enfocarAntena(index) {
            const ant = antenas[index];
            map.flyTo([ant.lat, ant.lng], 13, {
                duration: 1.5
            });

            if (userMarker) map.removeLayer(userMarker);

            circles.forEach(c => c.setStyle({
                fillOpacity: 0.05,
                weight: 1,
                color: '#008F4C'
            }));
            circles[index].setStyle({
                fillOpacity: 0.25,
                weight: 3,
                color: '#FFB800'
            });
            markers[index].openPopup();
        }

        async function buscarDireccion() {
            const query = document.getElementById('search-zone').value.trim();
            const listContainer = document.getElementById('zonas-list');

            if (!query) {
                mostrarListaOriginal();
                if (userMarker) map.removeLayer(userMarker);
                circles.forEach(c => c.setStyle({
                    fillOpacity: 0.05,
                    weight: 1,
                    color: '#008F4C'
                }));
                map.setView([19.689774, -98.880593], 11);
                return;
            }

            listContainer.innerHTML = `
                <div class="flex flex-col items-center justify-center py-12">
                    <i class="fa-solid fa-circle-notch fa-spin text-brand-green text-3xl mb-3"></i>
                    <p class="text-sm font-bold text-gray-600">Localizando dirección...</p>
                </div>
            `;

            try {
                // OpenStreetMap geocoder
                const url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&countrycodes=mx&limit=1`;
                const response = await fetch(url);
                const data = await response.json();

                if (data.length === 0) {
                    mostrarErrorBusqueda(query, "No pudimos encontrar esa dirección en el mapa. Intenta ser más específico.");
                    return;
                }

                const userLat = parseFloat(data[0].lat);
                const userLng = parseFloat(data[0].lon);
                const userLatLng = L.latLng(userLat, userLng);
                const displayName = data[0].display_name;

                calcularCobertura(userLatLng, displayName, query);

            } catch (error) {
                mostrarErrorBusqueda(query, "Ocurrió un error al buscar. Revisa tu conexión a internet.");
            }
        }

        function calcularCobertura(userLatLng, fullName, originalQuery) {
            let minDistance = Infinity;
            let nearestAnt = null;
            let nearestIndex = -1;

            antenas.forEach((ant, index) => {
                const antLatLng = L.latLng(ant.lat, ant.lng);
                const distance = userLatLng.distanceTo(antLatLng);

                if (distance < minDistance) {
                    minDistance = distance;
                    nearestAnt = ant;
                    nearestIndex = index;
                }
            });

            const tieneCobertura = minDistance <= 4000;
            const distanceKm = (minDistance / 1000).toFixed(1);

            dibujarCasita(userLatLng, tieneCobertura);

            const listContainer = document.getElementById('zonas-list');

            if (tieneCobertura) {
                const bounds = L.latLngBounds([userLatLng, L.latLng(nearestAnt.lat, nearestAnt.lng)]);
                map.fitBounds(bounds.pad(0.2));

                circles.forEach(c => c.setStyle({
                    fillOpacity: 0.05,
                    weight: 1,
                    color: '#008F4C'
                }));
                circles[nearestIndex].setStyle({
                    fillOpacity: 0.25,
                    weight: 3,
                    color: '#FFB800'
                });

                listContainer.innerHTML = `
                    <div class="flex flex-col items-center bg-green-50 p-6 rounded-xl border border-green-100 text-center shadow-sm">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center text-brand-green mb-4 shadow-inner">
                            <i class="fa-solid fa-house-circle-check text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-gray-800 text-lg mb-1">¡Estás en zona de cobertura!</h4>
                        <span class="text-[10px] font-bold text-brand-green bg-white px-3 py-1 rounded-md border border-green-200 inline-block mb-3 uppercase tracking-wide">Factibilidad 100%</span>
                        
                        <p class="text-sm text-gray-600 mb-2 font-medium leading-relaxed">
                            Te conectaremos a la <strong>${nearestAnt.name}</strong>, ubicada a solo ${distanceKm} km de distancia.
                        </p>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-3 w-full mb-5 text-left">
                            <p class="text-[11px] text-gray-500 leading-tight"><i class="fa-solid fa-location-dot text-brand-green mr-1"></i> ${fullName}</p>
                        </div>

                        <a href="https://wa.me/525512338776?text=Hola,%20confirmé%20que%20tengo%20cobertura%20en%20${encodeURIComponent(originalQuery)}.%20Quiero%20ver%20planes." target="_blank" class="bg-brand-green text-white text-sm font-bold py-3 px-6 rounded-lg hover:bg-brand-dark hover:shadow-md hover:-translate-y-0.5 transition-all w-full flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Contratar Ahora
                        </a>
                    </div>
                `;
            } else {
                map.setView(userLatLng, 13);
                circles.forEach(c => c.setStyle({
                    fillOpacity: 0.05,
                    weight: 1,
                    color: '#008F4C'
                }));

                listContainer.innerHTML = `
                    <div class="flex flex-col items-center bg-red-50 p-6 rounded-xl border border-red-100 text-center shadow-sm">
                        <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center text-red-500 mb-4 shadow-inner">
                            <i class="fa-solid fa-house-circle-xmark text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-gray-800 text-lg mb-1">Fuera de Cobertura</h4>
                        <span class="text-[10px] font-bold text-red-600 bg-white px-3 py-1 rounded-md border border-red-200 inline-block mb-3 uppercase tracking-wide">Área no abarcada</span>
                        
                        <p class="text-sm text-gray-600 mb-2 font-medium leading-relaxed">
                            La antena más cercana está a ${distanceKm} km. Seguimos expandiendo nuestra red.
                        </p>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-3 w-full mb-5 text-left">
                            <p class="text-[11px] text-gray-500 leading-tight"><i class="fa-solid fa-location-dot text-red-400 mr-1"></i> ${fullName}</p>
                        </div>

                        <a href="https://wa.me/525512338776?text=Hola,%20quisiera%20anotarme%20en%20lista%20de%20espera%20para%20la%20zona:%20${encodeURIComponent(originalQuery)}" target="_blank" class="bg-red-500 text-white text-sm font-bold py-3 px-6 rounded-lg hover:bg-red-600 hover:shadow-md hover:-translate-y-0.5 transition-all w-full flex justify-center items-center gap-2">
                            <i class="fa-solid fa-bell text-lg"></i> Avísenme cuando llegue
                        </a>
                    </div>
                `;
            }
        }

        function dibujarCasita(latlng, hasCoverage) {
            if (userMarker) map.removeLayer(userMarker);

            const color = hasCoverage ? 'text-brand-green' : 'text-red-500';
            const border = hasCoverage ? 'border-brand-green' : 'border-red-500';
            const shadow = hasCoverage ? 'shadow-[0_0_15px_rgba(0,143,76,0.5)]' : 'shadow-[0_0_15px_rgba(239,68,68,0.5)]';

            const houseIcon = L.divIcon({
                html: `<div class="flex items-center justify-center bg-white rounded-full ${shadow} border-2 ${border} ${color} transition-colors duration-300 relative" style="width: 36px; height: 36px;">
                            <i class="fa-solid fa-house"></i>
                            <div class="absolute -bottom-1 w-2 h-2 bg-white border-b-2 border-r-2 ${border} rotate-45"></div>
                       </div>`,
                className: 'leaflet-div-icon',
                iconSize: [36, 40],
                iconAnchor: [18, 40],
            });

            userMarker = L.marker(latlng, {
                icon: houseIcon
            }).addTo(map);
        }

        function mostrarErrorBusqueda(query, mensaje) {
            const listContainer = document.getElementById('zonas-list');
            listContainer.innerHTML = `
                <div class="flex flex-col items-center bg-gray-50 p-6 rounded-xl border border-gray-200 text-center">
                    <i class="fa-solid fa-magnifying-glass-location text-3xl text-gray-400 mb-3"></i>
                    <h4 class="font-bold text-gray-800 text-base mb-2">Sin resultados para: "${query}"</h4>
                    <p class="text-sm text-gray-500">${mensaje}</p>
                    <button onclick="document.getElementById('search-zone').value=''; buscarDireccion();" class="mt-4 text-brand-green font-bold text-sm hover:underline">Volver a ver antenas</button>
                </div>
            `;
        }
    </script>
</body>

</html>