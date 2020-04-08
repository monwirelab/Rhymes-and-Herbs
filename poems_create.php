<?php
    include('includes/header.php');
?>

    <!-- POEMS -->
    <div class="page-section">
        <div class="inner-section">
            <div class="poem-container">
                <form action="poems_create.php">
                    <div>
                        <label for="fname">Title:</label>
                    </div>
                    <div>
                        <input type="text" id="fname" name="firstname" placeholder="Write something..">
                    </div>
                    
                    <div>
                        <label for="subject">Poem:</label>
                    </div>
                    <div>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>

                    <div>
                    <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php
    include('includes/footer.php');
?>