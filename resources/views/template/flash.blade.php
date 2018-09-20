@if(session('flash_notification.level') == 'info')
    <script type="text/javascript">
        swal({
            title: "{{session('flash_notification.title')}}",
            text: "{{session('flash_notification.message')}}",
            type: "info",
            showConfirmButton: true
        });
    </script>
@elseif(session('flash_notification.level') == 'success')
    <script type="text/javascript">
        swal({
            title: "{{session('flash_notification.title')}}",
            text: "{{session('flash_notification.message')}}",
            type: "success",
            showConfirmButton: false
        });
    </script>
@elseif(session('flash_notification.level') == 'error')
    <script type="text/javascript">
        swal({
            title: "{{session('flash_notification.title')}}",
            text: "{{session('flash_notification.message')}}",
            type: "error",
            showConfirmButton: true
        });
    </script>
@endif