<!DOCTYPE html>
<html>

<head>
    <title>Clickable Array Elements</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link href="./css/judges.css" rel="stylesheet">
</head>

<body>
    <h1>Array Elements:</h1>
    <ul id="dataList"></ul>

    <h2>Selected Number Data:</h2>
    <p id="selectedData"></p>

    <div id="dataContainer"></div> <!-- Container to append the data -->

    <script>
        // Step 1: Create an array with 10 data elements
        const dataArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // Step 2: Access the HTML elements
        const dataListElement = document.getElementById('dataList');
        const selectedDataElement = document.getElementById('selectedData');
        const dataContainer = document.getElementById('dataContainer');
        console.log(dataListElement)

        // Step 3: Use a for loop to update the HTML content
        for (let i = 0; i < dataArray.length; i++) {
            // Create a new list item element for each data element in the array
            const listItemElement = document.createElement('li');

            // Set the content of the list item to the array element
            listItemElement.textContent = dataArray[i];

            // Add a click event listener to the list item
            listItemElement.addEventListener('click', function() {
                // When the list item is clicked, display its data in the 'selectedData' paragraph
                selectedDataElement.textContent = `You clicked number: ${dataArray[i]}`;

                // Create a new div element to hold the data
                const dataDiv = document.createElement('div');
                dataDiv.className = 'relative h-[280px] w-[280px]';

                // Fill the div with the required data
                dataDiv.innerHTML = `
          <span class="absolute top-[-15px] left-[-15px] h-[50px] flex items-center font-[900] text-2xl justify-center w-[50px] rounded-full text-white bg-green-400/90">${dataArray[i]}</span>
          <img src="../images/sample.jpg" alt="" class="rounded-md shadow-md h-[225px]">
          <p class="text-center mt-3 font-semibold italic text-xl">Jeschelle Tuazon</p>
        `;

                // Append the data div to the container
                dataContainer.appendChild(dataDiv);
            });

            // Append the list item to the unordered list
            dataListElement.appendChild(listItemElement);
        }
    </script>
</body>

</html>