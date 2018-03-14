var order = {};


function addToOrder($id, $operation) {

    var addOrder = {};
    var quantity = parseInt($('#quantity' + $id).val()) + parseInt($operation);


    if (quantity >= 0) {
        $('#quantityText' + $id).text(quantity);
    }
    if (quantity > 0) {
        addOrder['id'] = $id;
        addOrder['mealName'] = $('#mealName' + $id).val();
        addOrder['mealNameArabic'] = $('#mealNameArabic' + $id).val();
        addOrder['mealDescription'] = $('#mealDescription' + $id).val();
        addOrder['mealPrice'] = $('#mealPrice' + $id).val();
        addOrder['quantity'] = quantity;

        order[$id] = addOrder;

    } else {
        delete order[$id];
    }
    if (addOrder['quantity'] > 0) {
        $('#tr' + $id).slideDown();
    } else {

        $('#tr' + $id).slideUp();
    }


    if (Object.keys(order).length > 0) {
        $('#buttonDone').slideDown();
    } else {

        $('#buttonDone').slideUp();
    }

}

function movePage($id, $lang) {
    switch ($id) {
        case 1:
            $.each(order, function (index, value) {
                order[index]['mealDescription'] = $('#mealDescription' + index).val();
            });
            console.log(order);
            var total = 0;
            var totalUnit = 0;
            var newTable = '';
            var mealNameTitle = '';
            $.each(order, function (index, value) {
                switch ($lang) {
                    case 'en':
                        mealNameTitle = value['mealName'];
                        break;
                    case 'ar':
                        mealNameTitle = value['mealNameArabic'];
                        break;
                    default:
                        break
                }
                totalUnit = 0;
                newTable += '<tr>';
                newTable += '<td>' + mealNameTitle + '</td>';
                newTable += '<td>€' + value['mealPrice'] + '</td>';
                newTable += '<td>' + value['quantity'] + '</td>';
                totalUnit = parseFloat(value['mealPrice']).toFixed(2) * value['quantity'];
                total += totalUnit;
                newTable += '<td>€ ' + totalUnit + '</td>';
                newTable += '</tr>';
            });
            var TotalFixed = parseFloat(total).toFixed(2)
            $('#invoiceTable > tbody:last-child').append(newTable);
            $.each(order, function (index, value) {
                $('#ordersDescription').append(value['id']  +  ',' + value['quantity']+ ',' +value['mealDescription'] + '&&&');
            });

            $('<div id="totalPrice">' + TotalFixed + '</div>').appendTo('#Total');
            $('#invoice').slideDown();
            $('#orderMenu').slideUp();
            break;

        case 2:
            $("#invoiceTable > tbody").html("");
            $("#totalPrice").remove();
            $('#ordersDescription').val('');
            $('#orderMenu').slideDown();
            $('#invoice').slideUp();
            break;

        default:
            $('#orderMenu').slideUp();
            $('#invoice').slideUp();
            break;
    }
}