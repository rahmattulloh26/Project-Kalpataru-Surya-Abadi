{{--
    components/loading.blade.php
    Layar loading yang muncul saat halaman di-refresh atau berpindah halaman.
--}}
<div id="page-loader" class="fixed inset-0 z-9999 flex items-center justify-center bg-white" aria-hidden="true">

    <div id="loader-spinner" class="loader"></div>

</div>

<style>
    .loader {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: inline-block;
        border-top: 3.5px solid #52AE4A;
        border-right: 3.5px solid transparent;
        box-sizing: border-box;
        animation: loader-rotation 1s linear infinite;
    }

    @keyframes loader-rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
