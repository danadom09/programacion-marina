<?php
$autoras = "Dana Michelle y Zaireth Guadalupe";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Marina</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- MENÚ -->
    <header>
        <nav class="navbar">
            <div class="logo">🌊 CODE OCEAN</div>

            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#carrera">La carrera</a></li>
                <li><a href="#lenguajes">Lenguajes</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#autoras">Autoras</a></li>
            </ul>
        </nav>
    </header>


    <!-- INICIO -->
    <section id="inicio" class="hero">

        <div class="hero-content">

            <p class="mini">🌊 EXPLORA • CREA • PROGRAMA</p>

            <h1>
                CARRERA DE
                <span>PROGRAMACIÓN</span>
            </h1>

            <p>
                Sumérgete en el mundo de la tecnología y descubre
                cómo las ideas pueden convertirse en programas,
                aplicaciones y páginas web.
            </p>

            <a href="#carrera" class="boton">
                EXPLORAR 🌊
            </a>

        </div>

        <div class="pez">🐋</div>
        <div class="pez pez2">🐠</div>
        <div class="pez pez3">🐟</div>

    </section>


    <!-- CARRERA -->
    <section id="carrera" class="seccion">

        <h2>🐚 ¿Qué es la carrera de Programación?</h2>

        <p class="texto">
            La carrera de Programación prepara a los estudiantes
            para desarrollar software, páginas web y aplicaciones.
            También permite aprender diferentes lenguajes y herramientas
            para resolver problemas mediante la tecnología.
        </p>

        <div class="tarjetas">

            <div class="tarjeta">
                <span>💻</span>
                <h3>Desarrollo web</h3>
                <p>
                    Creación de páginas y sitios web utilizando
                    diferentes tecnologías.
                </p>
            </div>

            <div class="tarjeta">
                <span>🧠</span>
                <h3>Lógica</h3>
                <p>
                    Resolución de problemas mediante algoritmos
                    y estructuras de programación.
                </p>
            </div>

            <div class="tarjeta">
                <span>⚙️</span>
                <h3>Software</h3>
                <p>
                    Desarrollo de programas y sistemas capaces
                    de realizar diferentes tareas.
                </p>
            </div>

        </div>

    </section>


    <!-- LENGUAJES -->
    <section id="lenguajes" class="seccion fondo">

        <h2>🐠 Tecnologías que puedes aprender</h2>

        <div class="lenguajes">

            <div class="lenguaje">
                <div class="icono">🌐</div>
                <h3>HTML</h3>
                <p>
                    Se utiliza para crear la estructura
                    de las páginas web.
                </p>
            </div>

            <div class="lenguaje">
                <div class="icono">🎨</div>
                <h3>CSS</h3>
                <p>
                    Permite diseñar y darle estilo
                    a las páginas web.
                </p>
            </div>

            <div class="lenguaje">
                <div class="icono">⚡</div>
                <h3>JavaScript</h3>
                <p>
                    Agrega interacción y funciones
                    dinámicas a los sitios web.
                </p>
            </div>

            <div class="lenguaje">
                <div class="icono">🐘</div>
                <h3>PHP</h3>
                <p>
                    Lenguaje utilizado principalmente
                    para crear páginas web dinámicas.
                </p>
            </div>

        </div>

    </section>


    <!-- HABILIDADES -->
    <section id="habilidades" class="seccion">

        <h2>🪸 Habilidades que desarrolla</h2>

        <div class="habilidades">

            <div>💡 Pensamiento lógico</div>
            <div>🧩 Resolución de problemas</div>
            <div>⌨️ Programación</div>
            <div>🌐 Desarrollo web</div>
            <div>🔍 Análisis</div>
            <div>🚀 Creatividad</div>

        </div>

    </section>


    <!-- ÁREA INTERACTIVA -->
    <section class="interactivo">

        <h2>🐙 ¿Qué tipo de programador quieres ser?</h2>

        <p>
            Selecciona una opción y descubre una pequeña descripción.
        </p>

        <div class="botones">

            <button onclick="mostrarInfo('web')">
                🌐 Desarrollador Web
            </button>

            <button onclick="mostrarInfo('software')">
                💻 Desarrollador de Software
            </button>

            <button onclick="mostrarInfo('datos')">
                📊 Programador de Datos
            </button>

        </div>

        <div id="resultado">
            Selecciona una opción...
        </div>

    </section>


    <!-- AUTORAS -->
    <section id="autoras" class="autoras">

        <h2>🪼 Autoras de la página</h2>

        <div class="autora-card">

            <div class="avatar">👩🏻‍💻</div>

            <h3>Dana Michelle</h3>

            <p>
                Estudiante y creadora de contenido
                relacionado con programación.
            </p>

        </div>


        <div class="autora-card">

            <div class="avatar">👩🏻‍💻</div>

            <h3>Zaireth Guadalupe</h3>

            <p>
                Estudiante y creadora de la
                página web temática marina.
            </p>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <h3>🌊 CODE OCEAN</h3>

        <p>
            Página creada por:
            <strong><?php echo $autoras; ?></strong>
        </p>

        <p>
            © 2026 | Carrera de Programación
        </p>

    </footer>


    <script src="script.js"></script>

</body>
</html>