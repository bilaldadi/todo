// Use jQuery to make a GET request to the /items route
$.get('/items', function (data) {
    // The data argument will contain the JSON response from the server, which
    // will be an array of to-do list items
    data.forEach(function (item) {
        // Use the item template to create a new element for each to-do list item
        var itemElement = $('#item-template').clone();
        itemElement.removeAttr('id');
        itemElement.find('.item-name').text(item.name);
        itemElement.find('.item-completed').prop('checked', item.completed);
        itemElement.find('.item-delete').click(function () {
            // Implement the delete item functionality here
        });
        $('#item-list').append(itemElement);
    });
});
// Listen for submit events on the add item form
$('#add-item-form').submit(function (event) {
    event.preventDefault();

    // Use jQuery to get the value of the item name input
    var itemName = $('#item-name').val();

    // Use jQuery to make a POST request to the /items route
    $.post('/items', {
        name: itemName
    }, function (data) {
        // The data argument will contain the JSON response from the server, which
        // will be the newly created to-do list item
        var itemElement = $('#item-template').clone();
        itemElement.removeAttr('id');
        itemElement.find('.item-name').text(data.name);
        itemElement.find('.item-completed').prop('checked', data.completed);
        itemElement.find('.item-delete').click(function () {
            // Implement the delete item functionality here
        });
        $('#item-list').append(itemElement);
    });

    // Clear the value of the item name input
    $('#item-name').val('');
});
