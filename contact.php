<?php 
    define('TITLE', 'Contact');
    include('header-2.php');
?> 

<section class="lab-container-fluid">
    <article class="lab-row">
        <figure class="contact-banner"></figure>

        <section class="lab-container">
            <article class="lab-row">

                <section class="contact-wrapper">
                    
                    

                    <article class="contact-form-wrapper">
                    <header class="contact-header">
                        <h1>Contact Us</h1>
                    </header>

                        <form action="" method="post" class="contact-form ticket-form">

                            <div class="field-row" id="">
                                <div class="field-wrapper" id="inquiry-wrapper"> <!-- Inquiry Type -->

                                    <span><i class="fa fa-newspaper-o"></i></span>

                                    <div class="field-container" id="inquiry">
                                        <select name="inquiry-type" id="inquiry-type" class="ticket-input" >
                                            <option value="" selected disabled> </option>
                                            <option value="general">General Inquiry</option>
                                            <option value="technical">Technical Inquiry</option>
                                            <option value="sales">Sales</option>
                                            <option value="distributors">Become a Distributor</option>
                                        </select>
                                    </div>

                                </div> <!-- /Inquiry Type -->
                            </div>

                            <div class="field-row" id="row-1">

                                <div class="field-wrapper fleft"> <!-- name -->
                                    <span><i class="fa fa-user-circle"></i></span>

                                    <div class="field-container" id="name">
                                        <input name="ticket-name" class="ticket-input" type="text" placeholder="">
                                    </div> 
                                </div> <!-- /name -->

                                <div class="field-wrapper fright"> <!-- Company -->
                                    <span><i class="fa fa-building"></i></span>

                                    <div class="field-container" id="company">
                                        <input name="ticket-name" class="ticket-input" type="text" placeholder="">
                                    </div> 
                                </div> <!-- /Company -->
                                
                            </div>
                            <div class="field-row" id="row-2">

                                <div class="field-wrapper fleft"> <!-- Email -->
                                    <span><i class="fa fa-envelope"></i></span>

                                    <div class="field-container" id="email">
                                        <input name="ticket-name" class="ticket-input" type="email" placeholder="">
                                    </div> 
                                </div> <!-- /Email -->

                                <div class="field-wrapper fright"> <!-- Country -->
                                    <span><i class="fa fa-globe"></i></span>

                                    <div class="field-container" id="country">
                                        <?php $selName = 'contact-country'; include('include/country-2.php'); ?>
                                    </div> 
                                </div> <!-- /Country -->
                                
                            </div>

                            <div class="field-row" id="row-3">
                                <label for="comment">Comment / Message</label>
                                <textarea name="" id="comment" cols="30" rows="5" ></textarea>
                                <button class="contact-submit" type="submit">Submit</button>
                            </div>
                    
                        </form>



                    </article>

                    <article class="headquarters-wrapper">

                        <div class="headquarters" id="headquarter-1">
                            <h2>Australia Headquarters</h2>
                            <ul>
                                <li>
                                    <label for=""><i class="fa fa-map-marker"></i> Address</label>
                                    <p>Unit 7, 103 Sargents Road <br /> Minchinbury, NSW 2770 <br /> AUSTRALIA</p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <label for=""><i class="fa fa-phone"></i> Telephone</label>
                                    <p>+61 02 9625 9714</p>
                                </li>
                                <li>
                                    <label for=""><i class="fa fa-fax"></i> Fax</label>
                                    <p>+61 02 8834 0747</p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <label for=""><i class="fa fa-hashtag"></i> ABN</label>
                                    <p>85 003 869 565</p>
                                </li>
                            </ul>
                        </div>

                        <div class="headquarters" id="headquarter-2">
                            <h2>4D Labs Philippines</h2>
                            <ul>
                                <li>
                                    <label for=""><i class="fa fa-map-marker"></i> Address</label>
                                    <p>2nd Floor New Building, <br /> L9 B15 Ph3,CEZ, <br /> Rosario, Cavite, <br /> Philippines 4106</p>
                                </li>
                            </ul>
                        </div>

                    </article>

                </section>
            
            </article>
        </section>

    </article>
</section>

<?php include('footer-3.php'); ?>