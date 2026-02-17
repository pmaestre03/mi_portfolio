document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const targetID = this.getAttribute('href');
    document.querySelector(targetID).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

/**
 * Lógica de Multilenguaje para el Portfolio de Pau Maestre
 */

const langSelector = document.getElementById('language-selector');

// Función principal para cambiar el idioma
async function changeLanguage(lang) {
  try {
    // 1. Buscamos el archivo JSON correspondiente en la carpeta /lang
    const response = await fetch(`./lang/${lang}.json`);
    
    if (!response.ok) {
      throw new Error(`No se pudo cargar el archivo de idioma: ${lang}`);
    }

    const texts = await response.json();

    // 2. Seleccionamos todos los elementos que tengan el atributo 'data-key'
    const elementsToTranslate = document.querySelectorAll('[data-key]');

    elementsToTranslate.forEach(element => {
      const key = element.getAttribute('data-key');
      
      // Accedemos a la propiedad del JSON usando la clave (soporta puntos como 'header.title')
      const translation = key.split('.').reduce((obj, i) => (obj ? obj[i] : null), texts);
      
      if (translation) {
        // Usamos innerHTML para permitir etiquetas como <strong> o 📖 dentro del JSON
        element.innerHTML = translation;
      }
    });

    // 3. Guardamos la preferencia del usuario en el navegador
    localStorage.setItem('pau_portfolio_lang', lang);
    
    // 4. Cambiamos el atributo lang del HTML para accesibilidad y SEO
    document.documentElement.lang = lang;

  } catch (error) {
    console.error("Error al cambiar el idioma:", error);
  }
}

// Escuchamos cuando el usuario cambia la opción en el selector
langSelector.addEventListener('change', (event) => {
  changeLanguage(event.target.value);
});

// Al cargar la web, verificamos si ya había un idioma guardado
document.addEventListener('DOMContentLoaded', () => {
  const savedLang = localStorage.getItem('pau_portfolio_lang') || 'es';
  
  // Sincronizamos el selector visual con el idioma guardado
  langSelector.value = savedLang;
  
  // Aplicamos el idioma
  changeLanguage(savedLang);
});

