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

    $(document).ready(function() {
        $('#descriptionModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var title = button.data('title');
            var description = button.data('description');
            var image = button.data('image');
            var category = button.data('category');
            var quantity = button.data('quantity');
            var price = button.data('price');
            var discount = button.data('discount');

            // Update the modal's content
            var modal = $(this);
            modal.find('.modal-title').text(title);
            modal.find('.modal-body').html(`
            <p><strong>Description:</strong> ${description}</p>
            <p><strong>Category:</strong> ${category}</p>
            <p><strong>Quantity:</strong> ${quantity}</p>
            <p><strong>Price:</strong> $${price} ${discount ? `(Discounted: $${discount})` : ''}</p>
            <img src="${image}" alt="${title}" style="width: 100%; height: auto;">
        `);
        });
    });

</script>
