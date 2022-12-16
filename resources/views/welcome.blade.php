<!doctype html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="{{ asset("/style.css") }}">
</head>
<body>
<!-- Create a container element for the to-do list -->
<div class="todo-list">
    <!-- Create a form element for adding new to-do list items -->
    <form id="add-item-form">
        <!-- Create an input element for the to-do list item name -->
        <input type="text" id="item-name" placeholder="Enter a new to-do list item">
        <!-- Create a button element for submitting the form -->
        <button type="submit">Add</button>
    </form>

    <!-- Create a container element for the to-do list items -->
    <ul id="item-list">
        <!-- Create a template element for a to-do list item -->
        <template id="item-template">
            <!-- Create a list item element for the to-do list item -->
            <li class="item">
                <!-- Create a checkbox element for marking the to-do list item as completed -->
                <input type="checkbox" class="item-completed">
                <!-- Create a span element for the to-do list item name -->
                <span class="item-name"></span>
                <!-- Create a button element for deleting the to-do list item -->
                <button class="item-delete">Delete</button>
            </li>
        </template>
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset("/app.js") }}"></script>
</body>
</html>
