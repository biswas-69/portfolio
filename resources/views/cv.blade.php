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
