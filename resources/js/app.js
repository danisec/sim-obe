import "./bootstrap";
import jQuery from "jquery";
import Alpine from "alpinejs";
import "./index";

window.$ = jQuery;

Alpine.plugin(focus);
window.Alpine = Alpine;
Alpine.start();
