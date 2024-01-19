<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/jpg" href="./utilidades/favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pau Maestre Fernandez - Desarrollador Web</title>
</head>
<body>
    <div class="container">
        <header id="main-header">
            <div class="profile-image">
                <img src="./utilidades/pau.jpg" alt="Tu Imagen">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="#about">Sobre Mí</a></li>
                    <li><a href="#experience">Experiencia Laboral</a></li>
                    <li><a href="#knowledge">Conocimientos</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <section class="about" id="about">
            <h2>Sobre Mí</h2>
            <p>
                Hola a todos, me llamo Pau Maestre Fernandez y soy un chico de 20 años que actualmente está estudiando desarrollo de aplicaciones web en el segundo curso del grado superior. <br> Además de mis estudios, trabajo como celador en el Hospital Universitario de Bellvitge, donde contribuyo al funcionamiento del hospital y al bienestar de los pacientes. <br>

En mi tiempo libre, me gusta sumergirme en el mundo de los videojuegos para desconectar y disfrutar de nuevas experiencias. También soy un aficionado a las series y películas; de hecho, mi saga favorita es Star Wars. La epopeya galáctica y sus personajes icónicos realmente han dejado una marca en mi corazón cinéfilo. Estoy emocionado por seguir creciendo tanto en el desarrollo de aplicaciones web como en mis pasiones personales. ¡Nos vemos!</p>
        </section>

        <section class="experience" id="experience">
            <h2>Experiencia Laboral</h2>
            <div class="job">
                <h3>Celador - Hospital Universitario de Bellvitge</h3>
                <p>Como celador en el Hospital Universitario de Bellvitge, desempeñé un papel crucial en la atención al paciente y el funcionamiento eficiente del hospital. Mis responsabilidades incluyeron:</p>
                <ul>
                    <li>Transporte de pacientes a diferentes áreas del hospital.</li>
                    <li>Colaboración con el personal médico y de enfermería para garantizar un entorno seguro y cómodo para los pacientes.</li>
                    <li>Guiar a visitantes y pacientes a sus destinos dentro del hospital.</li>
                    <li>Asistir en la distribución de suministros médicos y equipo a las diferentes áreas del hospital.</li>
                    <li>Colaborar en la gestión del flujo de pacientes en la sala de emergencias.</li>
                    <li>Responder rápidamente a situaciones de emergencia y brindar asistencia según sea necesario.</li>
                    <li>Participar en la formación de nuevos celadores y personal hospitalario.</li>
                </ul>
            </div>
        </section>

        <section class="knowledge" id="knowledge">
            <h2>Conocimientos</h2>
            <details>
                <summary>Conocimientos Adquiridos en el Grado Superior de Desarrollo de Aplicaciones Web</summary>
                <ul>
                    <li>Desarrollo Front-end y Back-end</li>
                    <li>Lenguajes de Programación: HTML, CSS, JavaScript, PHP, etc.</li>
                    <li>Gestión de Bases de Datos con SQL</li>
                    <li>Diseño Responsivo y Experiencia de Usuario (UX)</li>
                    <li>Seguridad en Desarrollo Web</li>
                    <li>Desarrollo de Aplicaciones Móviles</li>
                    <li>Pruebas y Depuración de Software</li>
                    <li>Control de Versiones con Git</li>
                    <li>Despliegue y Administración de Aplicaciones en Servidores</li>
                </ul>
            </details>
            <br>
            <details>
                <summary>Conocimientos Adquiridos en el Grado Medio de Sistemas Microinformáticos y Redes</summary>
                <ul>
                    <li>Instalación y Mantenimiento de Sistemas Operativos</li>
                    <li>Montaje y Reparación de Equipos Microinformáticos</li>
                    <li>Redes Locales: Configuración y Mantenimiento</li>
                    <li>Servidores: Configuración y Administración</li>
                    <li>Seguridad Informática y Protección de Datos</li>
                    <li>Configuración y Mantenimiento de Periféricos</li>
                    <li>Soporte Técnico a Usuarios</li>
                    <li>Programación de Scripts y Automatización de Tareas</li>
                    <li>Gestión de Recursos en Redes</li>
                    <li>Virtualización de Sistemas</li>
                </ul>
            </details>
        </section>

        <section class="projects" id="projects">
            <h2>Proyectos</h2>
            <!-- Detalles sobre tus proyectos personales -->
            <div class="project">
                <h3>Quien quiere ser millonario</h3>
                <p>El proyecto consiste en desarrollar una aplicación web inspirada en el programa de televisión "¿Quién Quiere Ser Millonario?" Los usuarios podrán participar en preguntas de opción múltiple con niveles de dificultad creciente. Acertar preguntas les permitirá acumular puntos y avanzar hacia premios más altos. Se incluirán funciones de ayuda, como el comodín del público y el teléfono amigo. La aplicación proporcionará una experiencia interactiva, emocionante y educativa para los usuarios.</p>
                <a href="./proyectos/QuienQuiereSerMillonario/"></a>
            </div>
            <div class="project">
                <h3>Proyecto Personal 2</h3>
                <p>Descripción del proyecto personal 2...</p>
            </div>
            <!-- Puedes agregar más proyectos personales según sea necesario -->
        </section>

        <section class="contact" id="contact">
            <h2>Contacto</h2>
            <p>Puedes contactarme de las siguientes maneras: </p>
            <ul>
                <li>Email: <a href="mailto:maestrep15@gmail.com">maestrep15@gmail.com</a></li>
                <li>GitHub: <a href="https://github.com/pmaestre03" target="_blank">github.com/pmaestre03</a></li>
                <li>LinkedIn: <a href="https://www.linkedin.com/in/pau-maestre-fernandez-9b9841219/" target="_blank">linkedin.com/in/pau-maestre-fernandez</a></li>
                <li>Curriculum: <a download="curriculum" href="./utilidades/curriculum.pdf">Curriculum Vitae</a></li>
            </ul>
        </section>

        <footer>
            <p>&copy; 2024 Pau Maestre Fernandez - Desarrollador Web</p>
        </footer>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
