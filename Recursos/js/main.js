jQuery(document).ready(function() {
    jQuery('#desplazamientoVertical').fullpage({
    	sectionsColor: ['#1E88E5', '#673ab7', '#ff9800', '#ff0543', '#00bcd4','#009688'],
        anchors: ['inicio', 'acerca', 'blog11', 'blog12','contacto'],
        menu: '#menu',
		scrollingSpeed: 700,
    });
});