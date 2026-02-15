// UI Frameworks
import "bootstrap";
import "@phosphor-icons/web/light";
import "@phosphor-icons/web/regular";
import "@phosphor-icons/web/fill";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// Animations & Notifications
import AOS from "aos";
import Toastify from "toastify-js";
import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// Charts & Calendars
import Chart from "chart.js/auto";
import { Calendar } from "@fullcalendar/core";
import daygridPlugin from "@fullcalendar/daygrid";

// Forms & Editors
import Choices from "choices.js";
import Dropzone from "dropzone";
import Quill from "quill";
import { Grid } from "gridjs";
import dayjs from "dayjs";

// Global Initializations
window.AOS = AOS;
window.Toastify = Toastify;
window.Chart = Chart;
window.Calendar = Calendar;
window.daygridPlugin = daygridPlugin;
window.Choices = Choices;
window.Dropzone = Dropzone;
window.Quill = Quill;
window.Grid = Grid;
window.dayjs = dayjs;
// register Swiper modules then expose to window
Swiper.use([Navigation, Pagination]);
window.Swiper = Swiper;

// Jalankan AOS agar animasi muncul saat scroll
AOS.init({ duration: 800, once: true });
