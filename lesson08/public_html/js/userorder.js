console.log('User Order.js');

$('#user-delete-order').on('click', function () {
    let id = $(this).data('id');
    $.post(
        '/shop/order.php?action=delete',
        {id: id},
        function (response) {
            if (response.result == "OK") {
                alert(`Ваш заказ номер ${id} успешно удалён`);
            } else {
                alert('Не удалось удалить заказ');
            }
        }
    );
});