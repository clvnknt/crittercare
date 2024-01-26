<!DOCTYPE html>
<html>
<head>
    <title>Modal Popup Example</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Button to Open Modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Button to Show Bootstrap Alert -->
        <button class="btn btn-success" id="showAlertBtn">Show Bootstrap Alert</button>

        <!-- Button to Toggle Bootstrap Modal -->
        <button class="btn btn-info" id="toggleModalBtn">Toggle Modal</button>

        <!-- Button to Perform JavaScript Action -->
        <button class="btn btn-warning" id="customActionBtn">Custom JavaScript Action</button>

        <!-- Bootstrap Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This is the content of the modal.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to show a Bootstrap alert
        $('#showAlertBtn').click(function() {
            // Create a Bootstrap alert and append it to the page
            const alert = $('<div class="alert alert-success" role="alert">This is a Bootstrap alert.</div>');
            $('.container').append(alert);
        });

        // Function to toggle the Bootstrap modal
        $('#toggleModalBtn').click(function() {
            $('#myModal').modal('toggle');
        });

        // Custom JavaScript action
        $('#customActionBtn').click(function() {
            // You can perform any custom JavaScript action here
            alert('Custom JavaScript action executed!');
        });
    </script>
</body>
</html>
