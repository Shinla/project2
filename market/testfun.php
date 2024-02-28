<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Website</title>
</head>
<body>
    <div>
        <h1>Mining Website</h1>
        <button id="startMiningBtn">Start Mining</button>
        <button id="stopMiningBtn">Stop Mining</button>
        <p id="miningResult"></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

    <script>
      $(document).ready(function() {
        $("#startMiningBtn").click(function() {
            // Assuming you have a user ID available (replace with actual user ID)
            var userId = 1;

            $.ajax({
                url: "test.php",
                method: "POST",
                data: { userId: userId },
                success: function(response) {
                    $("#miningResult").text(response);
                    $("#startMiningBtn").hide();
                    $("#stopMiningBtn").show();

                    // After 8 hours, show the timestamp again
                    setTimeout(function() {
                        $("#miningResult").text("Mining started at: " + response);
                        $("#startMiningBtn").show();
                        $("#stopMiningBtn").hide();
                    }, 8 * 60 * 60 * 1000); // 8 hours in milliseconds
                },
                error: function(xhr, status, error) {
                    console.error("Error starting mining: " + error);
                }
            });
        });

        $("#stopMiningBtn").click(function() {
            // Handle stopping mining (you might want to implement this part)
            $("#miningResult").text("Mining stopped.");
            $("#startMiningBtn").show();
            $("#stopMiningBtn").hide();
        });
    });
    </script>
</body>
</html>
