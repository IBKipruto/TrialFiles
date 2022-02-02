<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="containers.css">
  <title>Containers 2.0</title>
</head>
<body>
<div class="row"id="row1">
  <h1>Second Trial at Containers</h1>
</div>

<div class="row">
  <div class="column" id="colum1" >
    <h3>Container with Text and a form</h3>
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis laudantium, libero magni, maiores natus optio perferendis possimus provident quam quisquam quod repudiandae voluptas. Doloremque enim eos fuga placeat sed vitae.</span><span>Alias at aut autem commodi dolorum earum eum explicabo facilis ipsam laborum maxime nam nesciunt omnis optio placeat quae quisquam quo, quod saepe sequi soluta velit voluptatem voluptatum? Excepturi, sed!</span><span>Consequatur exercitationem ipsum neque nesciunt quae quam qui, suscipit? Adipisci cumque distinctio est eveniet hic
        impedit modi, nihil odio, optio provident quod rem sequi unde ut voluptas. A minima, voluptatum.</span></p>
    <h4>Registration Form</h4>
    <p>Please Fill in the form below to facilitate proper planning and club allocation</p>
    <form action="" id="form1">
      <label for="name">Full Name</label><br>
      <input type="text"name="Name" id="name" placeholder="Enter Your Full Name"><br>

      <label for="regno">Registration Number</label><br>
      <input type="text"name="Registration Number" id="regno" placeholder="X001/1234/2011"><br>

      <label for="year">Year Of Study</label><br>
      <input type="text" name="Year of Study" id="year" placeholder="2011"><br>


      <p style="align-content: center" id="p1">Degree To be awarded</p><br>
        <input type="radio" id="psy" name="degree" value="PSY">
      <label for="psy">B.A PSYCHOLOGY</label><br>
      <input type="radio" id="BEd" name="degree" value="BEd">
      <label for="BEd">Bachelor Of Education</label><br>
      <input type="radio" id="BSc" name="degree" value="BSc">
      <label for="BSc">Bachelor of Science Computer Science</label><br>

      <p style="align-content: center" id="p2">Marital Status</p><br>
      <input type="checkbox" name="Single" id="single"> <label for="single">Single</label><br>


      <input type="checkbox" name="Married"id="married"> <label for="married">Married</label><br>


      <input type="checkbox"name="Divorced"id="divorced"> <label for="divorced">Divorced</label><br>

      <input type="submit" value="Register"><br>
    </div>
  <div class="column" id="colum2">
  <h3>Container with Image</h3>
  <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at aut eos est explicabo illum iusto magnam neque nisi possimus quidem quod recusandae repudiandae sapiente sed tempore, voluptas, voluptates?</span><span>Autem corporis deleniti dignissimos dolore, earum eos esse exercitationem explicabo neque, nostrum odit quam recusandae reprehenderit. Accusamus aperiam autem corporis cupiditate, eos esse fugiat nulla odio provident rerum veritatis vero.</span><span>Aut eaque eligendi, ex facilis fugiat incidunt inventore iste minima pariatur quis repellendus saepe sint veritatis? Animi atque consequatur
      cupiditate dolorem eos excepturi ipsum omnis pariatur quo tenetur? Eligendi, laborum?</span>  </p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pic.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="AI.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="customer%20service.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  </div>

  <div class="column" id="colum3">
    <h3>Container with Table</h3>
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque cum dolor dolorem, dolores doloribus exercitationem ipsum minus neque odit provident, quisquam quo ratione rem repudiandae? Cum cumque eos quaerat?</span><span>Accusantium alias cum delectus deserunt doloribus dolorum eligendi esse, facilis labore, laboriosam laudantium magnam mollitia neque non odio odit perferendis porro, praesentium quia reiciendis rerum soluta totam ut! Aperiam, dolorem.</span><span>Distinctio dolorum error excepturi, exercitationem fuga libero minima nemo quia sunt vel! Architecto deserunt earum enim in
        labore minima natus provident quos, tenetur ullam! At beatae delectus eaque sed soluta.</span></p>
    <table class="table-responsive" width="100%">
      <caption>Data table</caption>
      <tr>
        <th>Name</th>
        <th> Age</th>
        <th>Gender</th>

      </tr>
      <tr>
        <td>Isaac</td>
        <td>20</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Drew</td>
        <td>23</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Mercy</td>
        <td>17</td>
        <td>Female</td>
      </tr>
      <tr>
        <td>Andrew</td>
        <td>275</td>
        <td>Shemale</td>
      </tr>
      <tr>
        <td>Massi</td>
        <td>888</td>
        <td>Idiot Man</td>
      </tr>


    </table>
    <h4>Contact Us</h4>
    <p>In-case of any questions please fill in the form below and one of our customer representatives will get back to you</p>
    <form action="">
      <label for="name">Full Names</label><br>
      <input type="text"id="name" name="Name" placeholder="Enter your full name"><br>

      <label for="email">Email</label><br>
      <input type="text"name="Email" id="email"placeholder="name@domain.com"><br>

      <label for="questions">Your Enquiry</label><br>
      <input type="text" id="questions"name="Questions" placeholder="Enter your question here" class="responsive"><br>

      <input type="checkbox" id="checkbox"> <label for="checkbox">By clicking this you are confirming to have read and understood Our terms and Conditions</label><br>

      <input type="button" value="Contact Us"><br>

    </form>
  </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>