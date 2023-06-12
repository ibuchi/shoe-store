import './bootstrap';
import './components/Animation';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;


import Toastify from 'toastify-js';

import PlayApp from './components/PlayApp';

window.Toastify = Toastify;

Alpine.data('playApp', PlayApp);

Alpine.start();


