<form action="/" method="GET">
    <div>
        <label for="name">name</label>
        <input id="name" name="name" type="text">
    </div>
    <div>
        <label for="password">password</label>
        <input id="password" name="password" type="password">
    </div>
</form>



<script>
const form = document.getElementById('')
form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null){
        message.push ('Name is Required')
    }
    if (password.value.length <=6 ){
        message.push('password must be longer than 6')
    }

    if (message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(', ')
    }
})


    (function($) {
        "use strict";
        $('.validate-input .input100').each(function() {
            $(this).on('blur', function() {
                if (validate(this) == false) {
                    showValidate(this);
                } else {
                    $(this).parent().addClass('true-validate');
                }
            })
        })
        var input = $('.validate-input .input100');
        $('.validate-form').on('submit', function() {
            var check = true;
            for (var i = 0; i < input.length; i++) {
                if (validate(input[i]) == false) {
                    showValidate(input[i]);
                    check = false;
                }
            }
            return check;
        });
        $('.validate-form .input100').each(function() {
            $(this).focus(function() {
                hideValidate(this);
                $(this).parent().removeClass('true-validate');
            });
        });

        function validate(input) {
            if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                    return false;
                }
            } else {
                if ($(input).val().trim() == '') {
                    return false;
                }
            }
        }

        function showValidate(input) {
            var thisAlert = $(input).parent();
            $(thisAlert).addClass('alert-validate');
            $(thisAlert).append('<span class="btn-hide-validate">&#xf135;</span>')
            $('.btn-hide-validate').each(function() {
                $(this).on('click', function() {
                    hideValidate(this);
                });
            });
        }

        function hideValidate(input) {
            var thisAlert = $(input).parent();
            $(thisAlert).removeClass('alert-validate');
            $(thisAlert).find('.btn-hide-validate').remove();
        }
    })(jQuery);
</script>