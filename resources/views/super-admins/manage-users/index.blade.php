@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card custom-card bg-FFF8EA text-black">
        <div class="card-body">
            <h1 class="card-title">Submit a New Report</h1>
            <p class="mb-3">Help us make the community safer by submitting a report about any issues or concerns. Please provide accurate and complete information to help us address the situation effectively.</p>

            <hr> <!-- Add a horizontal line below the description -->

            <form action="{{ route('users.reports.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type:</label>
                            <select name="type" id="type" class="form-select form-control" required>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="case_type_id" class="form-label">Case Type:</label>
                            <select name="case_type_id" id="caseTypeSelect" class="form-select form-control" required>
                                <!-- Options will be dynamically loaded here using AJAX -->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="picture" class="form-label">Upload Picture:</label>
                            <input type="file" name="picture" class="form-control" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label">Upload Video:</label>
                            <input type="file" name="video" class="form-control" accept="video/*">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn" style="background-color: #F4C67F;">Submit Report</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .custom-card {
        background-color: #FFF8EA;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #000;
        padding: 20px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#type').change(function () {
            var selectedType = $(this).val();
            updateCaseTypes(selectedType);
        });

        // Initialize the case types based on the default selected type
        updateCaseTypes($('#type').val());

        function updateCaseTypes(selectedType) {
            $.ajax({
                url: "{{ route('getCaseTypes') }}",
                type: 'GET',
                data: {
                    type: selectedType
                },
                success: function (data) {
                    // Update the case type options
                    var caseTypeSelect = $('#caseTypeSelect');
                    caseTypeSelect.empty();

                    $.each(data, function (key, value) {
                        caseTypeSelect.append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        }
    });
</script>
@endsection
