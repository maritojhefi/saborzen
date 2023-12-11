import './bootstrap';
import Swal from 'sweetalert2';
import $ from 'jquery';
import select2 from "select2";
import dropzone from "dropzone";
import './assets';
import 'font-awesome/css/font-awesome.css';

window.jQuery = window.$ = $
window.Swal = Swal;
window.addEventListener("notification", (data) => {
    const { type, message, toast = true } = data.detail[0];
    Swal.fire({
        toast: toast,
        position: toast == true ? "top" : "bottom-end",
        showConfirmButton: false,
        showCloseButton: true,
        timer: 5000,
        background: "#585858e3",
        color: "white",
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
        icon: type,
        title: message,
    });
});