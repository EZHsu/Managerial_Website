<?php
include("AdminClose.php");
?>
<!DOCTYPE html>
<!-- 管理員手動新增書籍資料表單 --> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Serenity - v4.6.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .form-btn {
            text-align: center;
            font-size: 20px;

        }

        .submit-btn {
            color: #fff;
            background-color: #94c045;
            border-style: none;
            border-radius: 25px;
            width: 200px;
            height: 35px;
            font-weight: 800;


        }

        .submit-btn:hover {
            color: #fff;
            background-color: darkgreen;
            border-radius: 25px;

        }
    </style>


</head>

<body>

<main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Book Addition Form</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li>Management</li>
                    <li>Book Addition Form</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
    </main>

    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">

                        <form enctype="multipart/form-data" name="add_book" ; method="post" action="addBookData.php">
                            <div class="form-group">
                                <span class="form-label">Name:</span>
                                <input class="form-control" name="book_name" type="text" placeholder="Please Enter the Name">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Author:</span>
                                        <input class="form-control" name="book_author" type="text" placeholder="Please Enter the Author">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Translator:</span>
                                        <input class="form-control" name="book_trans" type="text" placeholder="Please Enter the Translator">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Publish Date：</span>
                                        <input class="form-control" name="book_date" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Publisher：</span>
                                        <input class="form-control" name="book_public" type="text" placeholder="Please Enter the Publisher">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">ISBN：</span>
                                <input class="form-control" name="book_ISBN" type="text" placeholder="ISBN">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Language</span>
                                        <select class="form-control" name="book_lang">
                                            <option value="English">English</option> 
                                            <option value="Traditional Chinese">Traditional Chinese</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Category</span>
                                        <select class="form-control" name="book_type">
                                        <option value="no">Please Select</option>
                        <option value="Business">Business</option>
                        <option value="Science">Science</option>
                        <option value="Comsci">Comsci</option>
                        <option value="Med">Med</option>
                        <option value="Language">Language</option>
                        <option value="Social Science">Social Science</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Art and Design">Art and Design</option>
                        <option value="Travel">Travel</option>
                        <option value="Textbook">Text Book</option>
                        <option value="Test Materials">Test Materials</option>
                        <option value="Novel">Novel</option>
                        <option value="Comics">Comics</option>
                        <option value="Picture Book">Picture Book</option>
                        <option value="Children's Book">Children's Book</option>

                        
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                Cover Photo :
                                <input name="book_img" type="file"><br>
                            </div>
                            <br>
                            <div>
                                <span class="form-label">Intro:</span>
                                <textarea class="form-control" placeholder="Please Write an Intro" name="book_intro"cols="100%" rows="5"></textarea><br>        
                            </div>


        <input type="hidden" name="apply_status" value="1">
        <input type="hidden" name="apply_applicant" value="admin">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="submit">Add</button>
                                        <br><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="reset">Reset</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="button" onclick="window.open('', '_self', ''); window.close();">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>




