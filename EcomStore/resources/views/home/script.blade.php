{{--<script src="home/js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="home/js/bootstrap.min.js"></script>--}}
{{--<script src="home/js/jquery.nice-select.min.js"></script>--}}
{{--<script src="home/js/jquery-ui.min.js"></script>--}}
{{--<script src="home/js/jquery.slicknav.js"></script>--}}
{{--<script src="home/js/mixitup.min.js"></script>--}}
{{--<script src="home/js/owl.carousel.min.js"></script>--}}
{{--<script src="home/js/main.js"></script>--}}



<script src="{{ asset('home/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('home/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('home/js/mixitup.min.js') }}"></script>
<script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home/js/main.js') }}"></script>



<script>

    // $(document).ready(function() {
    //     $('#descriptionModal').on('show.bs.modal', function (event) {
    //         var button = $(event.relatedTarget); // Button that triggered the modal
    //         var title = button.data('title');
    //         var description = button.data('description');
    //         var image = button.data('image');
    //         var category = button.data('category');
    //         var quantity = button.data('quantity');
    //         var price = button.data('price');
    //         var discount = button.data('discount');
    //
    //         // Update the modal's content
    //         var modal = $(this);
    //         modal.find('.modal-title').text(title);
    //         modal.find('.modal-body').html(`
    //         <p><strong>Description:</strong> ${description}</p>
    //         <p><strong>Category:</strong> ${category}</p>
    //         <p><strong>Quantity:</strong> ${quantity}</p>
    //         <p><strong>Price:</strong> $${price} ${discount ? `(Discounted: $${discount})` : ''}</p>
    //         <img src="${image}" alt="${title}" style="width: 100%; height: auto;">
    //     `);
    //     });
    // });

    $('#descriptionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal

        // Extract info from data-* attributes
        var title = button.data('title');
        var description = button.data('description');
        var image = button.data('image');
        var category = button.data('category');
        var quantity = button.data('quantity');
        var price = button.data('price');
        var discount = button.data('discount');
        var productId = button.data('id');
        var quantityMax = button.data('quantitymax');

        var modal = $(this);
        modal.find('#modalTitle').text(title);
        modal.find('#modalDescription').text(description);
        modal.find('#modalPrice').text(price);
        modal.find('#modalImage').attr('src', image);
        modal.find('#modalCategory').text(category);
        modal.find('#modalQuantity').text(quantity);

        // Check if discount exists
        if (discount) {
            modal.find('#modalOldPrice').show(); // Show the old price
            modal.find('#modalOldPriceValue').text('$' + price); // Set the old price
            modal.find('#modalPrice').text('$' + discount); // Set the discounted price
        } else {
            modal.find('#modalOldPrice').hide(); // Hide the old price if no discount
        }

        $('productIdInput').val(productId)

        $('#modalQuantityInput').attr('max', quantityMax);

        $('#addToCartForm').attr('action', '/add_to_cart/' + productId);
    });

   






</script>
