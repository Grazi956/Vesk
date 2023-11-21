$(function () {
    $(document).on("submit", "#notaFiscalForm", function (event) {
        event.preventDefault();

        $.ajax({
            type: "POST",
            url: "invoice.php",
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === "Done!") {
                    $("#success-message").html("Cadastro realizado com sucesso!");
                    $('#form_new_client')[0].reset();
                } else {
                    $(".form-message").html(response);
                }
            }
        });
    });
});
