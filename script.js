function mostrarInfo(tipo) {

    const resultado = document.getElementById("resultado");

    if (tipo === "web") {

        resultado.innerHTML =
            "🌐 <strong>Desarrollador Web:</strong><br>" +
            "Crea páginas y aplicaciones web utilizando HTML, CSS, JavaScript, PHP y otras tecnologías.";

    }

    else if (tipo === "software") {

        resultado.innerHTML =
            "💻 <strong>Desarrollador de Software:</strong><br>" +
            "Diseña y desarrolla programas que ayudan a resolver diferentes necesidades.";

    }

    else if (tipo === "datos") {

        resultado.innerHTML =
            "📊 <strong>Programador de Datos:</strong><br>" +
            "Trabaja con información, bases de datos y herramientas que permiten analizar grandes cantidades de datos.";

    }

}