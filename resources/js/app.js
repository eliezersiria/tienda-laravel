// app.js
import '../css/app.css';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// app.js
import Swal from 'sweetalert2';
import './eliminar-marca.js';

//Alpine focus
import focus from '@alpinejs/focus'
 
Alpine.plugin(focus)

import 'penguinui';