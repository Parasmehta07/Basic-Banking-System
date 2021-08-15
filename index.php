<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <title>Basic Banking System</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="js/contact.js " defer></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
  <script src="https://kit.fontawesome.com/5680908766.js" crossorigin="anonymous"></script>
  <style>

  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex">
      <a class="navbar-brand" href="#">Banking System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex 0">
          <li class="nav-item px-3 ">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item px-3 ">
            <a class="nav-link active" aria-current="page" href="customer.php">View customers</a>
          </li>
          <li class="nav-item px-3 ">
            <a class="nav-link active" aria-current="page" href="transaction.php">Transaction</a>
          </li>
          <li class="nav-item px-3 ">
            <a class="nav-link active" aria-current="page" href="index.php">Contact Us</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/money7.jpg" class="d-block w-100" alt="Basic Banking System" height="400px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Saving Account</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bank.jpg" class="d-block w-100" alt="Basic Banking System" height="400px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Current Account</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/credit-card.jpg" class="d-block w-100" alt="Basic Banking System" height="400px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Credit Card</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="service_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section_title text-center mb-90">
            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
              style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;"></span>
            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"
              style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">What
              we offer for you</h3>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
              style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">We
              provide online instant cash loans with quick approval that suit your term</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s"
            style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInLeft;">
            <div class="service_icon_wrap text-center">
              <div class="service_icon">
                <img src="img/loan.jpg" alt="">
              </div>
            </div>
            <div class="info text-center">
              <span>Home Loan</span>
              <h3>₹5000-₹20000</h3>
            </div>
            <div class="service_content">
              <ul>
                <li> Borrow - ₹350 over 3 months </li>
                <li> Interest rate - 292% pa fixed</li>
                <li>Total amount payable - ₹525.12</li>
                <li>Representative - 1,286% APR</li>
              </ul>
              <div class="apply_btn">
                <button class="boxed-btn3" type="submit">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
            style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="service_icon_wrap text-center">
              <div class="service_icon">
                <img src="img/car.jpg" alt="">
              </div>
            </div>
            <div class="info text-center">
              <span>Car Loan</span>
              <h3>₹4000-₹15000</h3>
            </div>
            <div class="service_content">
              <ul>
                <li> Borrow - ₹350 over 3 months </li>
                <li> Interest rate - 12% pa fixed</li>
                <li>Total amount payable - ₹525.12</li>
                <li>Representative - 1,286% APR</li>
              </ul>
              <div class="apply_btn">
                <button class="boxed-btn3" type="submit">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s"
            style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInRight;">
            <div class="service_icon_wrap text-center">
              <div class="service_icon ">
                <img src="img/education.jpg" alt="">
              </div>
            </div>
            <div class="info text-center">
              <span>Education Loan</span>
              <h3>₹100000-₹1500000</h3>
            </div>
            <div class="service_content">
              <ul>
                <li> Borrow - ₹350 over 3 months </li>
                <li> Interest rate - 12% pa fixed</li>
                <li>Total amount payable - ₹525.12</li>
                <li>Representative - 1,286% APR</li>
              </ul>
              <div class="apply_btn">
                <button class="boxed-btn3" type="submit">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container services-down">

    <div class="row section">
      <div class="col-lg-12">
        <h1 style="text-align: center;padding-top: 25px;">Our Services</h1>
        <p style="text-align: center;">Whether you are opening your first bank account or have managed a checking
          account
          for years, we will provide you with different types of banking services available.</p>

      </div>
    </div>
    <center>
      <div style="display: flex;box-sizing: border-box;">
        <div style="flex: 50%;padding: 10px;height: 338px;">
          <img src="img/img11.png" height="200" width="250">
          <h4>View Transfer History</h4>
          <p>View all transfer details that has been done till date among customers.</p><br>
          <a href="transaction.php"><button class="button2" style="vertical-align:middle">
              <h5><span style="font-family: Trebuchet MS">Transfer History</span></h5>
            </button></a>

        </div>
        <div style="flex: 50%;padding: 10px;height: 338px;">
          <img src="img/customers.png" height="200" width="400">
          <h4>View All Customers</h4>
          <p>View all customers registered and transfer money to customers as required.</p><br>
          <a href="customer.php"><button class="button2" style="vertical-align:middle">
              <h5><span style="font-family: Trebuchet MS">View Customers</span></h5>
            </button></a>

        </div>
      </div>
    </center>
    <div><br><br><br></div>
  </div>
  <section id="contactus">
    <div class="container-fluid mt-4 mb-5">
      <h2 class="section_heading">
        <span>Contact Us</span>
        <span></span>
      </h2>

      <div class="container-fluid pb-4">
        <div class="row pt-3" id="contact_section ">
          <div class="col-md-6 order-md-first order-last mt-4">
            <!-- Contact Form -->
            <div class="container-lg px-lg-5">
              <form class="contact_form" onsubmit="event.preventDefault(); contactUs();" autocomplete="off"
                method="GET">
                <div class="row">
                  <div class="col mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" />
                  </div>
                  <div class="col mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" />
                  </div>
                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-duration="2000">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="contactEmail" required />
                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-duration="2000">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="contactSubject" required />
                </div>
                <div class="mb-4" data-aos="fade-up" data-aos-duration="2000">
                  <label for="message" class="form-label">Message</label>
                  <textarea name="contactMessage" class="form-control" id="contactMessage" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-secondary submit_button" data-aos="fade-up"
                  data-aos-duration="2000">
                  Submit
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 order-md-last order-first mt-4" data-aos="fade-up" data-aos-duration="2000">
            <iframe
              src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81706.69424506!2d72.8503359461155!3d19.071183313121875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1628575559699!5m2!1sen!2sin"
              class="contact_map" style="border: 0" allowfullscreen=" " loading=" lazy "></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-light text-center text-white">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#" role="button"><i
            class="fab fa-facebook-f"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#" role="button"><i
            class="fab fa-twitter"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#" role="button"><i
            class="fab fa-google"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#" role="button"><i
            class="fab fa-instagram"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#" role="button"><i
            class="fab fa-linkedin-in"></i></a>

        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#" role="button"><i
            class="fab fa-github"></i></a>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(4 4 4 / 29%); font-weight: 700;">
      Copyright &copy; Paras Mehta | All right reserved!
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
    crossorigin="anonymous "></script>
  <script>
    AOS.init({
      delay: 100,
      duration: 1000,
      easing: "ease-in-out",
      once: true,
    });
  </script>
</body>

</html>