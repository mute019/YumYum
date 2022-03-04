<?php 
    include_once './includes/header.php';
    include_once './includes/dbconnec.php';
?>

        <main>       
            <section class="bk_and_abt">
                <div class="about-section">
                    <article>
                        <h1>
                            Welcome to <div> Yum Yum! </div>
                        </h1>
                        <p>
                            Discover the best foods and drinks in India
                        </p>

                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngkey.com%2Fpng%2Ffull%2F31-313879_roast-clipart-cooked-duck-thanksgiving-turkey-cooked-clip.png&f=1&nofb=1" alt="roasted-chicken">
                    </article>
                </div>
                <div class="Booking-section">
                    <article>
                        <h1> Book a Seat Now</h1>
                        <p>
                            Now book a seat at your nearest Restaurant 
                        </p>
                    </article>
                    <form action="./includes/form.php" method="POST">
                        <label for="date-picker">Pick a Date</label>
                        <input type="date" name="date-picker" required>
                        <label for="city">Pick a City</label>
                        <select name="city" id="cty">
                          <option value="Kolkata">Kolkata</option>
                          <option value="Mumbai">Mumbai</option>
                          <option value="Bengaluru">Bengaluru</option>
                          <option value="Chennai">Chennai</option>
                          <option value="Patna">Patna</option>
                          <option value="Pune">Pune</option>
                        </select> 
                        <input type="text" name="name" id="" placeholder="Fullname">
                        <input type="text" name="cont-number" id="" placeholder="Contact Number"> 
                        <input type="submit" name="submit" value="Book" onClick="">
                    </form>
                    <div class="err-handler-container">
                        <?php
                        if (isset($_GET["error"])){
                            if($_GET["error"] == "invldInput") {
                                echo "<p class=\"err-handler\">Empty Fields Not Allowed</p>";
                            }

                            if($_GET["error"] == "invldNumber") {
                                echo "<p class=\"err-handler\">Enter a Valid Contact Number</p>";
                            }

                            if($_GET["error"] == "invlduid") {
                                echo "<p class=\"err-handler\">Enter a Valid Name</p>";
                            }

                            if($_GET["error"] == "exists") {
                                echo "<p class=\"err-handler\">Already Booked</p>";
                            }
                        }

                        if (isset($_GET["query"])){
                            if($_GET["query"] == "success") {
                                echo "<p class=\"err-handler\" style=\" color:green; \">Successfully Booked</p>";
                            }
                        }

                        ?>
                    <div>
                </div>

                
                
            </section>

            <section class="last-section">
                <div class="card">
                    <img src="./dependencies/images/booking.png" alt="booking">
                    <article>
                        <h4>Book</h4>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, corrupti ex unde exercitationem consequuntur eum culpa distinctio optio, nisi repellat nesciunt delectus temporibus totam assumenda et eos blanditiis recusandae? Iusto.
                        </p>
                    </article>
                </div>

                <div class="card">
                    <img src="./dependencies/images/clock.png" alt="clock">
                    <article>
                        <h4>Wait for Our Executive</h4>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, corrupti ex unde exercitationem consequuntur eum culpa distinctio optio, nisi repellat nesciunt delectus temporibus totam assumenda et eos blanditiis recusandae? Iusto.
                        </p>
                    </article>
                </div>

                <div class="card">
                    <img src="./dependencies/images/customer-care.png" alt="customer-care">
                    <article>
                        <h4>Provide Details</h4>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, corrupti ex unde exercitationem consequuntur eum culpa distinctio optio, nisi repellat nesciunt delectus temporibus totam assumenda et eos blanditiis recusandae? Iusto.
                        </p>
                    </article>
                </div>

            </section>
    </main>
        

<?php 
    include_once './includes/footer.php';
?>


        