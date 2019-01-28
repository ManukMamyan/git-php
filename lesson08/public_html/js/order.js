console.log('Order.js');

$('#delete-order').on('click', function () {
    let id = $(this).data('id');
    $.post(
        '/admin/order.php?action=delete',
        {id: id},
        function (response) {
            if (response.result == "OK") {
                alert(`Заказ номер ${id} успешно удалён`);
            } else {
                alert('Не удалось удалить заказ');
            }
        }
    );
});