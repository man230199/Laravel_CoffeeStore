$(document).ready(function () {
    let quantity = $("#quantity-input").val();
    let new_quantity = 0;
    $(".quantity-left-minus").on("click", function () {
        if (quantity > 1) {
            new_quantity = quantity--;
        } else {
            new_quantity = 1;
        }
        replace_quantity = $("#quantity-input")
            .val()
            .replace(new_quantity, quantity);

        $("#quantity-input").val(replace_quantity);
    });
    $(".quantity-right-plus").on("click", function () {
        new_quantity = quantity++;
        replace_quantity = $("#quantity-input")
            .val()
            .replace(new_quantity, quantity);
        $("#quantity-input").val(replace_quantity);
    });

    // $("size").on("change", function () {
    //     size = $("#size").data("size");
    // });

    $("#add-to-cart").on("click", function () {
        let url = $(this).data("url");
        let quantity = $("#quantity-input").val();
        let size = $('select[name="size"]').val();
        let price = $('input[name="price"]').val();
        let product_id = $('input[name="product_id"]').val();

        let cart = $(".nav-item cart").parent();
        var cart_quantity = $("#cart_quantity").text();
        $.ajax({
            type: "GET",
            url,
            data: {
                product_id: product_id,
                price: price,
                size: size,
                quantity: quantity,
            },
            dataType: "json",
            success: function (res) {
                cart_quantity = parseInt(cart_quantity) + parseInt(quantity);
                $("#cart_quantity").text(cart_quantity);
                cart.find("a").notify("Đã cập nhật giỏ hàng", {
                    position: "bottom center",
                    className: "success",
                  });
            },
        });
    });
});
