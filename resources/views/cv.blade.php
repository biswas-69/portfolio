<!DOCTYPE html>
<html>
<head>
    <title>CV Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
        }
        .section {
            margin-bottom: 20px;
        }
        .dynamic-input {
            margin-bottom: 5px;
        }
        button {
            padding: 8px 15px;
            background-color: #3b82f6;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Create Your CV</h1>

    <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="section">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>

        <div class="section">
            <label>Address:</label>
            <input type="text" name="address" required>
        </div>

        <div class="section">
            <label>Education:</label>
            <div id="educationFields">
                <input type="text" name="education[]" class="dynamic-input" required>
            </div>
            <button type="button" onclick="addField('educationFields', 'education[]')">+ Add More</button>
        </div>

        <div class="section">
            <label>Experience:</label>
            <div id="experienceFields">
                <input type="text" name="experience[]" class="dynamic-input" required>
            </div>
            <button type="button" onclick="addField('experienceFields', 'experience[]')">+ Add More</button>
        </div>

        <div class="section">
            <label>Hobbies:</label>
            <div id="hobbyFields">
                <input type="text" name="hobbies[]" class="dynamic-input" required>
            </div>
            <button type="button" onclick="addField('hobbyFields', 'hobbies[]')">+ Add More</button>
        </div>

        <div class="section">
            <label>Awards:</label>
            <div id="awardFields">
                <input type="text" name="award[]" class="dynamic-input" required>
            </div>
            <button type="button" onclick="addField('awardFields', 'award[]')">+ Add More</button>
        </div>

        <div class="section">
            <label>Photo:</label>
            <input type="file" name="photo" accept="image/*">
        </div>

        <button type="submit">Preview CV</button>
    </form>

    <script>
        function addField(containerId, inputName) {
            const container = document.getElementById(containerId);
            const input = document.createElement("input");
            input.type = "text";
            input.name = inputName;
            input.classList.add("dynamic-input");
            container.appendChild(input);
        }
    </script>

</body>
</html>
