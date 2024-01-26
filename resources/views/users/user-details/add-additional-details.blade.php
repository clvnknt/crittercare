@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-white text-black mb-4">
        <div class="card-header">
            <h2 class="text-center">Add Additional User Details</h2>
            <p class="text-center">Provide additional information about yourself below.</p>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('users.store-additional-details') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Address Details -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" class="form-control" required>
                                <option value="" disabled selected>Select Province</option>
                                <!-- Dropdown options will be dynamically added here using JavaScript -->
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" class="form-control" required>
                                <option value="" selected disabled>Select City</option>
                                <!-- Dropdown options will be dynamically added here using JavaScript -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="street">Street</label>
                            <input type="text" name="street" class="form-control" placeholder="Enter your street" required>
                        </div>

                        <div class="form-group">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" name="postal_code" class="form-control" placeholder="Enter your postal code" required>
                        </div>
                    </div>

                    <!-- Additional Personal Details -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="citizenship">Citizenship</label>
                            <select name="citizenship" class="form-control" required>
                                <option value="" disabled selected>Select your citizenship</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <input type="text" name="occupation" class="form-control" placeholder="Enter your occupation" required>
                        </div>

                        <div class="form-group">
                            <label for="spouse">Spouse Name (Optional)</label>
                            <input type="text" name="spouse" class="form-control" placeholder="Enter your spouse's name">
                        </div>

                        <div class="form-group">
                            <label for="children_names">Child/Children Name/s (Optional)</label>
                            <input type="text" name="children_names" class="form-control" placeholder="Enter the name/s">
                        </div>
                    </div>

                    <!-- Pet Ownership Experience Details -->
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="current_household_pets">Current number of Household Pets</label>
                        <input type="number" name="current_household_pets" id="current_household_pets" class="form-control" placeholder="Enter the number" min="0" max="100" required>
                    </div>
                        <div class="form-group">
                            <label for="visit_veterinarian">Do your Pet/s get checked up?</label>
                            <select name="visit_veterinarian" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="valid_id">Upload Valid ID (Optional)</label>
                            <input type="file" name="valid_id" class="form-control-file" accept=".jpg, .jpeg, .png" onchange="previewValidId(this);">
                            <img id="validIdPreview" src="#" alt="Valid ID Preview" style="max-width: 100%; display: none;">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <div class="text-right">
                        <a href="{{ route('users.account-settings') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn" style="background-color: #F4C67F;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewValidId(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#validIdPreview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Object mapping provinces to cities in the Philippines
        var provincesAndCities = {
            "Abra": ["Bangued", "Boliney", "Bucay"],
            "Agusan del Norte": ["Butuan", "Cabadbaran", "Carmen"],
            "Agusan del Sur": ["San Francisco", "Bayugan", "Prosperidad"],
            "Aklan": ["Kalibo", "Batan", "Altavas"],
            "Albay": ["Legazpi", "Ligao", "Tabaco"],
            "Antique": ["San Jose", "Sibalom", "Hamtic"],
            "Apayao": ["Kabugao", "Conner", "Pudtol"],
            "Aurora": ["Baler", "Dinalungan", "Dilasag"],
            "Basilan": ["Isabela", "Lamitan", "Sumisip"],
            "Bataan": ["Balanga", "Dinalupihan", "Orion"],
            "Batanes": ["Basco", "Itbayat", "Ivana"],
            "Batangas": ["Batangas", "Lipa", "Tanauan"],
            "Benguet": ["Baguio", "La Trinidad", "Itogon"],
            "Biliran": ["Naval", "Biliran", "Cabucgayan"],
            "Bohol": ["Tagbilaran", "Dauis", "Panglao"],
            "Bukidnon": ["Malaybalay", "Valencia", "Manolo Fortich"],
            "Bulacan": ["Malolos", "Meycauayan", "San Jose del Monte"],
            "Cagayan": ["Tuguegarao", "Aparri", "Cauayan"],
            "Camarines Norte": ["Daet", "Labo", "Mercedes"],
            "Camarines Sur": ["Naga", "Iriga", "Ligao"],
            "Camiguin": ["Mambajao", "Mahinog", "Guinsiliban"],
            "Capiz": ["Roxas", "Panay", "Ponteverda"],
            "Catanduanes": ["Virac", "Caramoran", "Pandan"],
            "Cavite": ["Dasmariñas", "Bacoor", "Imus"],
            "Cebu": ["Cebu", "Mandaue", "Lapu-Lapu"],
            "Compostela Valley": ["Nabunturan", "Montevista", "Compostela"],
            "Cotabato": ["Kidapawan", "M'lang", "Matalam"],
            "Davao de Oro": ["Nabunturan", "Maco", "Mawab"],
            "Davao del Norte": ["Tagum", "Panabo", "Sto. Tomas"],
            "Davao del Sur": ["Davao", "Digos", "Padada"],
            "Davao Occidental": ["Malita", "Santa Maria", "Sarangani"],
            "Davao Oriental": ["Mati", "Banaybanay", "Tarragona"],
            "Dinagat Islands": ["San Jose", "Dinagat", "Loreto"],
            "Eastern Samar": ["Borongan", "Guiuan", "Dolores"],
            "Guimaras": ["Jordan", "Buenavista", "Nueva Valencia"],
            "Ifugao": ["Lagawe", "Kiangan", "Hingyon"],
            "Ilocos Norte": ["Laoag", "Batac", "Badoc"],
            "Ilocos Sur": ["Vigan", "Candon", "Santa"],
            "Iloilo": ["Iloilo", "Passi", "Miagao"],
            "Isabela": ["Ilagan", "Cauayan", "Santiago"],
            "Kalinga": ["Tabuk", "Lubuagan", "Rizal"],
            "La Union": ["San Fernando", "Agoo", "Bauang"],
            "Laguna": ["Santa Rosa", "Calamba", "San Pedro"],
            "Lanao del Norte": ["Iligan", "Tubod", "Bacolod"],
            "Lanao del Sur": ["Marawi", "Tugaya", "Bacolod-Kalawi"],
            "Leyte": ["Tacloban", "Ormoc", "Baybay"],
            "Maguindanao": ["Buluan", "Datu Paglas", "Datu Saudi-Ampatuan"],
            "Marinduque": ["Boac", "Gasan", "Mogpog"],
            "Masbate": ["Masbate", "Mandaon", "Uson"],
            "Metro Manila": ["Manila", "Quezon", "Makati"],
            "Misamis Occidental": ["Oroquieta", "Tangub", "Ozamiz"],
            "Misamis Oriental": ["Cagayan de Oro", "Gingoog", "El Salvador"],
            "Mountain Province": ["Bontoc", "Sagada", "Tadian"],
            "Negros Occidental": ["Bacolod", "Bago", "Talisay"],
            "Negros Oriental": ["Dumaguete", "Bais", "Guihulngan"],
            "Northern Samar": ["Catarman", "Laoang", "Allen"],
            "Nueva Ecija": ["Palayan", "Cabanatuan", "San Jose"],
            "Nueva Vizcaya": ["Bayombong", "Solano", "Bagabag"],
            "Occidental Mindoro": ["Mamburao", "San Jose", "Sablayan"],
            "Oriental Mindoro": ["Calapan", "Naujan", "Bongabong"],
            "Palawan": ["Puerto Princesa", "Coron", "El Nido"],
            "Pampanga": ["Angeles", "Mabalacat", "San Fernando", "Apalit", "Arayat", "Bacolor", "Candaba", "Floridablanca", "Guagua", "Lubao", "Macabebe", "Magalang", "Masantol", "Mexico", "Minalin", "Porac", "San Luis", "San Simon", "Santa Ana", "Santa Rita", "Santo Tomas", "Sasmuan"],
            "Pangasinan": ["Lingayen", "Dagupan", "Urdaneta"],
            "Quezon": ["Lucena", "Tayabas", "Mauban"],
            "Quirino": ["Cabarroguis", "Diffun", "Maddela"],
            "Rizal": ["Antipolo", "Rodriguez", "Cainta"],
            "Romblon": ["Romblon", "Odiongan", "San Fernando"],
            "Sarangani": ["Alabel", "Maasim", "Malungon"],
            "Siquijor": ["Siquijor", "Larena", "Enrique Villanueva"],
            "Sorsogon": ["Sorsogon", "Gubat", "Barcelona"],
            "South Cotabato": ["Koronadal", "General Santos", "Polomolok"],
            "Southern Leyte": ["Maasin", "Sogod", "Libagon"],
            "Sultan Kudarat": ["Isulan", "Tacurong", "Lambayong"],
            "Sulu": ["Jolo", "Indanan", "Parang"],
            "Surigao del Norte": ["Surigao", "Dapa", "Alegria"],
            "Surigao del Sur": ["Tandag", "San Miguel", "Lianga"],
            "Tarlac": ["Tarlac", "Paniqui", "Tarlac"],
            "Tawi-Tawi": ["Bongao", "Panglima Sugala", "Simunul"],
            "Zambales": ["Olongapo", "Iba", "Subic"],
            "Zamboanga del Norte": ["Dipolog", "Dapitan", "Polanco"],
            "Zamboanga del Sur": ["Pagadian", "Zamboanga", "Dumalinao"],
            "Zamboanga Sibugay": ["Ipil", "Kabasalan", "Mabuhay"]
        };

        // Get references to the province and city dropdowns
        var provinceDropdown = document.querySelector('select[name="province"]');
        var cityDropdown = document.querySelector('select[name="city"]');

        // Function to update the city dropdown based on the selected province
        function updateCityDropdown() {
            var selectedProvince = provinceDropdown.value;

            // Clear existing options in the city dropdown
            cityDropdown.innerHTML = '<option value="" selected disabled>Select City</option>';

            // Populate the city dropdown with cities from the selected province
            var cities = provincesAndCities[selectedProvince] || [];
            cities.forEach(function (city) {
                var option = document.createElement('option');
                option.value = city;
                option.text = city;
                cityDropdown.appendChild(option);
            });
        }

        // Populate the province dropdown with provinces
        var provinces = Object.keys(provincesAndCities);
        provinces.forEach(function (province) {
            var option = document.createElement('option');
            option.value = province;
            option.text = province;
            provinceDropdown.appendChild(option);
        });

        // Listen for the change event on the province dropdown
        provinceDropdown.addEventListener('change', updateCityDropdown);
    });

    const citizenships = [
    "Afghan", "Albanian", "Algerian", "American", "Andorran", "Angolan",
    "Antiguan and Barbudan", "Argentinian", "Armenian", "Australian", "Austrian", "Azerbaijani",
    "Bahamian", "Bahraini", "Bangladeshi", "Barbadian", "Belarusian", "Belgian", "Belizean", "Beninese",
    "Bhutanese", "Bolivian", "Bosnian and Herzegovinian", "Brazilian", "British", "Bruneian", "Bulgarian", "Burkinabe", "Burmese", "Burundian",
    "Cambodian", "Cameroonian", "Canadian", "Cape Verdean", "Central African", "Chadian", "Chilean", "Chinese", "Colombian", "Comoran", "Congolese", "Costa Rican", "Croatian", "Cuban", "Cypriot", "Czech",
    "Danish", "Djiboutian", "Dominican", "Dutch",
    "East Timorese", "Ecuadorean", "Egyptian", "Emirian", "Equatorial Guinean", "Eritrean", "Estonian", "Ethiopian",
    "Fijian", "Filipino", "Finnish", "French",
    "Gabonese", "Gambian", "Georgian", "German", "Ghanaian", "Greek", "Grenadian", "Guatemalan", "Guinea-Bissauan", "Guinean", "Guyanese",
    "Haitian", "Herzegovinian", "Honduran", "Hungarian",
    "I-Kiribati", "Icelander", "Indian", "Indonesian", "Iranian", "Iraqi", "Irish", "Israeli", "Italian", "Ivorian",
    "Jamaican", "Japanese", "Jordanian",
    "Kazakhstani", "Kenyan", "Kittian and Nevisian", "Kuwaiti", "Kyrgyz", "Laotian", "Latvian", "Lebanese", "Liberian", "Libyan", "Liechtensteiner", "Lithuanian", "Luxembourger",
    "Macedonian", "Malagasy", "Malawian", "Malaysian", "Maldivian", "Malian", "Maltese", "Marshallese", "Mauritanian", "Mauritian", "Mexican", "Micronesian", "Moldovan", "Monacan", "Mongolian", "Montenegrin", "Moroccan", "Mosotho", "Motswana", "Mozambican", "Myanmarian",
    "Namibian", "Nauruan", "Nepalese", "New Zealander", "Nicaraguan", "Nigerian", "Nigerien", "North Korean", "Norwegian",
    "Omani",
    "Pakistani", "Palauan", "Panamanian", "Papua New Guinean", "Paraguayan", "Peruvian", "Polish", "Portuguese", "Qatari",
    "Romanian", "Russian", "Rwandan",
    "Saint Lucian", "Salvadoran", "Samoan", "San Marinese", "Sao Tomean", "Saudi", "Senegalese", "Serbian", "Seychellois", "Sierra Leonean", "Singaporean", "Slovakian", "Slovenian", "Solomon Islander", "Somali", "South African", "South Korean", "South Sudanese", "Spanish", "Sri Lankan", "Sudanese", "Surinamer", "Swazi", "Swedish", "Swiss", "Syrian",
    "Taiwanese", "Tajik", "Tanzanian", "Thai", "Togolese", "Tongan", "Trinidadian or Tobagonian", "Tunisian", "Turkish", "Tuvaluan",
    "Ugandan", "Ukrainian", "Uruguayan", "Uzbekistani",
    "Vanuatuan", "Venezuelan", "Vietnamese",
    "Yemeni",
    "Zambian", "Zimbabwean"
];

const citizenshipDropdown = document.querySelector('[name="citizenship"]');

// Sort the array alphabetically
citizenships.sort();

// Populate the dropdown with citizenship options
citizenships.forEach(citizenship => {
    const option = document.createElement('option');
    option.value = citizenship;
    option.textContent = citizenship;
    citizenshipDropdown.appendChild(option);
});
</script>
@endsection
