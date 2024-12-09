        function openPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }

        function closePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }

        function openPopup1() {
            var popup = document.getElementById("popup1");
            popup.style.display = "block";
        }

        function closePopup1() {
            var popup = document.getElementById("popup1");
            popup.style.display = "none";
        }

        function addTableRow() {
            var table = document.getElementById("service-table");
            var newRow = table.insertRow(table.rows.length);
            var newFeature = document.getElementById("new-feature").value;
            var newPrice = document.getElementById("new-price").value;

            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            cell1.innerHTML = '<input type="text" name="Features" value="' + newFeature + '">';
            cell2.innerHTML = '<input type="number" name="Prices" value="' + newPrice + '">';

            closePopup();
        }

        function openPopup2() {
            var popup = document.getElementById("popup2");
            popup.style.display = "block";
        }

        function closePopup2() {
            var popup = document.getElementById("popup2");
            popup.style.display = "none";
        }