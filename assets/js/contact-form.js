/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function ($, window, document, undefined) {
    'use strict';

    function hasFormValidation () {
        return (typeof document.createElement('input').checkValidity === 'function');
    };

    function addError (el) {
        return el.parent().addClass('has-error');
    };

    if (!hasFormValidation()) {
        $('#contact-form').submit(function () {
            var hasError = false,
                name     = $('#form-name'),
                mail     = $('#form-email'),
                assunto  = $('#form-assunto'),
                mensagem = $('#form-mensagem'),
                testmail = /^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/,
                $this    = $(this);

            $this.find('div').removeClass('has-error');

            if (name.val() === '') {
                hasError = true;
                addError(name);
            }

            if (!testmail.test(mail.val())) {
                hasError = true;
                addError(mail);
            }

            if (assunto.val() === '') {
                hasError = true;
                addError(assunto);
            }

            if (mensagem.val() === '') {
                hasError = true;
                addError(mensagem);
            }

            if (hasError === false) {
                return true;
            }

            return false;
        });
    }
}(jQuery, window, document));
