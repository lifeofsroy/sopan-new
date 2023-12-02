<script>
    document.addEventListener("DOMContentLoaded", function() {

        function isRipple(ripple) {
            if (ripple == 'yes') {
                return 1;
            } else {
                return 0;
            }
        }

        function isDismissible(dismiss) {
            if (dismiss == 'yes') {
                return 1;
            } else {
                return 0;
            }
        }

        document.addEventListener("session-message", function(e) {
            let message = (e.detail[0]).message;
            let type = (e.detail[0]).type;
            let duration = (e.detail[0]).duration;
            let ripple = isRipple((e.detail[0]).ripple);
            let dismissible = isDismissible((e.detail[0]).dismissible);
            let positionX = (e.detail[0]).positionX;
            let positionY = (e.detail[0]).positionY;

            window.notyf.open({
                type,
                message,
                duration,
                ripple,
                dismissible,
                position: {
                    x: positionX,
                    y: positionY
                }
            });
        });
    });
</script>
