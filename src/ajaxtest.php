<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <script src="https://kit.fontawesome.com/470d815d8e.js"crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
<div class="flex">
    <div class="w-1/2 h-full">
        <button class="btn btn-outline btn-primary" id="myButton" onclick="toggleBackground()">Click me</button>
    </div>
    <div id="pdf_document" class="flex hidden justify-end w-1/2 overflow-hidden">
        <embed class="" src="/Group%203%20-%20A%20Clinic%20Management%20System%20-%20Pre-Approval%20Form.docx.pdf"
               type="application/pdf" style="width: 100%; height: 100vh;">
    </div>
    <button id="button_id">
    button increment

    </button>
    <p id="buttonclicked">

    </p>

</div>

<script>
    let x = 0;
    document.getElementById("button_id").addEventListener("click", function() {
        x += 1;
        document.getElementById('buttonclicked').innerHTML = `button clicked ${x}`;
    });

    let colorToggle = false;
    function toggleBackground() {
        let button = document.getElementById('myButton');

        if (colorToggle) {
            button.classList.add('btn-primary');
            button.classList.remove('btn-success');
            document.getElementById('pdf_document').classList.add('hidden');
        } else {
            button.classList.remove('btn-primary');
            button.classList.add('btn-success');
            document.getElementById('pdf_document').classList.remove('hidden');
        }
         colorToggle = !colorToggle; // Toggle the stat
    }
</script>
<script>
    const [first, second, , fourth] = [1, 2, 3, 4];
    document.getElementById('buttonclicked').innerHTML = `${first} ${second} ${fourth}`;

    const person = {
        name: 'John',
        age: 30,
        country: 'USA'
    };

    // Extract data from the object
    const name = person['name'];
    const age = person['age'];
    const country = person['country'];

    // Print the extracted data
    console.log(`Name: ${name}`);
    console.log(`Age: ${age}`);
    console.log(`Country: ${country}`);
</script>

</body>
</html>

