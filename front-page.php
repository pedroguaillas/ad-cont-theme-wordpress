<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner1.png');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1>Optimiza legalmente tus impuestos<br><em>y protege tu crecimiento financiero.</em></h1>
        <p class="hero-description">
            Transformamos la carga tributaria en una estrategia de crecimiento
            mediante planificación fiscal preventiva.
        </p>
        <div class="hero-buttons">
            <a href="#contacto" class="btn btn-primary">Agenda tu asesoría</a>
            <a href="https://wa.me/59399123456" class="btn btn-outline" target="_blank" rel="noopener">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.611.611l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.143 0-4.144-.663-5.787-1.8l-.404-.263-2.645.887.887-2.645-.263-.404A9.935 9.935 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
                Escríbenos por WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- Sobre Nosotros -->
<section class="sobre-nosotros" id="sobre-nosotros">
    <div class="container">
        <div class="section-header">
            <h2>Sobre Nosotros</h2>
            <p class="section-subtitle"><em>Estrategia Contable y Tributaria</em></p>
        </div>
        <div class="sobre-nosotros-content">
            <div class="sobre-nosotros-text">
                <p>
                    En <strong>AD Cont</strong> brindamos servicio contable y Tributario con enfoque estratégico.
                </p>
                <p>
                    Nuestro especialidad es la planificación tributaria preventiva, ayudando a
                    empresarios y profesionales de <strong>Guayaquil</strong> a anticiparse y tomar
                    decisiones inteligentes dentro del marco legal ecuatoriano.
                </p>
            </div>
            <div class="sobre-nosotros-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sobre-nosotros.png" alt="Oficina AD Cont" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Servicios -->
<section class="servicios" id="servicios">
    <div class="container">
        <div class="section-header">
            <h2>Nuestros Servicios</h2>
            <p class="section-subtitle"><em>Soluciones a tu medida</em></p>
        </div>
        <div class="servicios-grid">
            <div class="servicio-card">
                <div class="servicio-icon">
                    <!-- Planificación: portapapeles con gráfico de barras ascendente -->
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10" y="6" width="32" height="40" rx="3" fill="#E3F2FD"/>
                        <rect x="10" y="6" width="32" height="40" rx="3" fill="#1565C0" fill-opacity="0.08"/>
                        <path d="M20 6h12v5a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2V6z" fill="#1565C0"/>
                        <rect x="16" y="20" width="4" height="14" rx="1.5" fill="#42A5F5"/>
                        <rect x="24" y="24" width="4" height="10" rx="1.5" fill="#1E88E5"/>
                        <rect x="32" y="16" width="4" height="18" rx="1.5" fill="#0D47A1"/>
                        <path d="M15 34l6-6 6 4 8-10" stroke="#F57C00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Planificación Tributaria Estratégica</h3>
                <p>Optimizamos tu carga fiscal de forma legal, anticipándonos a los procesos del SRI.</p>
            </div>
            <div class="servicio-card">
                <div class="servicio-icon">
                    <!-- Integración: nodos conectados / red empresarial -->
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26" cy="14" r="7" fill="#FFF3E0"/>
                        <circle cx="26" cy="14" r="5" fill="#FF8F00"/>
                        <path d="M26 19v5" stroke="#FF8F00" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="13" cy="36" r="6" fill="#FFF8E1"/>
                        <circle cx="13" cy="36" r="4" fill="#FFA000"/>
                        <circle cx="39" cy="36" r="6" fill="#FFF8E1"/>
                        <circle cx="39" cy="36" r="4" fill="#FFA000"/>
                        <path d="M19 33l5-9M27 24l5 9" stroke="#FFB300" stroke-width="2" stroke-linecap="round"/>
                        <path d="M19 37h14" stroke="#FFB300" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="26" cy="14" r="2.5" fill="white"/>
                        <circle cx="13" cy="36" r="2" fill="white"/>
                        <circle cx="39" cy="36" r="2" fill="white"/>
                    </svg>
                </div>
                <h3>Integración de Grupo Tributario</h3>
                <p>Consolidamos la información fiscal de tu grupo empresarial para máxima eficiencia.</p>
            </div>
            <div class="servicio-card">
                <div class="servicio-icon">
                    <!-- Exoneración: auto vista frontal -->
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Cuerpo inferior -->
                        <rect x="5" y="28" width="42" height="14" rx="4" fill="#1565C0"/>
                        <!-- Techo / cabina -->
                        <path d="M14 28c0 0 3-12 12-12s12 12 12 12H14z" fill="#1E88E5"/>
                        <!-- Parabrisas -->
                        <path d="M17 28c0 0 2-8 9-8s9 8 9 8H17z" fill="#B3E5FC"/>
                        <!-- Capó central -->
                        <rect x="20" y="28" width="12" height="5" rx="1" fill="#1976D2"/>
                        <!-- Parrilla frontal -->
                        <rect x="18" y="33" width="16" height="5" rx="2" fill="#0D47A1"/>
                        <rect x="20" y="34.5" width="12" height="1.5" rx="0.75" fill="#42A5F5"/>
                        <rect x="20" y="37" width="12" height="1.5" rx="0.75" fill="#42A5F5"/>
                        <!-- Faro izquierdo -->
                        <ellipse cx="10" cy="31" rx="4" ry="3" fill="#FFF176"/>
                        <ellipse cx="10" cy="31" rx="2.5" ry="2" fill="#FFEE58"/>
                        <!-- Faro derecho -->
                        <ellipse cx="42" cy="31" rx="4" ry="3" fill="#FFF176"/>
                        <ellipse cx="42" cy="31" rx="2.5" ry="2" fill="#FFEE58"/>
                        <!-- Rueda izquierda -->
                        <circle cx="11" cy="42" r="5" fill="#263238"/>
                        <circle cx="11" cy="42" r="2.5" fill="#90A4AE"/>
                        <!-- Rueda derecha -->
                        <circle cx="41" cy="42" r="5" fill="#263238"/>
                        <circle cx="41" cy="42" r="2.5" fill="#90A4AE"/>
                        <!-- Manija / espejo izquierdo -->
                        <rect x="3" y="30" width="3" height="5" rx="1" fill="#0D47A1"/>
                        <!-- Manija / espejo derecho -->
                        <rect x="46" y="30" width="3" height="5" rx="1" fill="#0D47A1"/>
                    </svg>
                </div>
                <h3>Exoneración y Matrices Tributarias</h3>
                <p>Te asesoramos en la reducción lícita de tributos mediante exoneraciones vigentes.</p>
            </div>
            <div class="servicio-card">
                <div class="servicio-icon">
                    <!-- Devolución: moneda con flecha de retorno -->
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26" cy="26" r="18" fill="#FFF8E1"/>
                        <circle cx="26" cy="26" r="14" fill="#FFD54F"/>
                        <circle cx="26" cy="26" r="10" fill="#FFC107"/>
                        <text x="26" y="31" text-anchor="middle" font-size="14" font-weight="bold" fill="#E65100" font-family="Georgia, serif">$</text>
                        <path d="M38 12a18 18 0 0 1 0 28" stroke="#F57F17" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M38 40l-4-4 4-4" stroke="#F57F17" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Devolución de Impuestos</h3>
                <p>Gestionamos la recuperación de pagos en exceso y créditos tributarios a tu favor.</p>
            </div>
        </div>
    </div>
</section>

<!-- Misión -->
<section class="mision" id="mision">
    <div class="mision-overlay"></div>
    <div class="container mision-content">
        <div class="section-header">
            <h2>Nuestra Misión</h2>
        </div>
        <p>
            Brindar soluciones contables y tributarias estratégicas que permitan a nuestros
            clientes optimizar sus recursos, cumplir con la normativa vigente y alcanzar
            sus objetivos financieros con tranquilidad y confianza.
        </p>
    </div>
</section>

<?php get_footer(); ?>
