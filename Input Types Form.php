<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="iframeStyle.css">
    <title>Input Types</title>
</head>
<body>
<h2>Registration Form</h2>
<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorum eius error esse expedita, illo maxime mollitia necessitatibus odit officia perferendis placeat quas quo, quod recusandae repudiandae similique ullam voluptatum?</span><span>Asperiores assumenda blanditiis cumque error excepturi nisi porro reiciendis saepe tempora totam? Animi blanditiis cumque dicta eaque et, expedita fugiat laborum mollitia, nisi nobis non odio perferendis quas rem repudiandae.</span><span>Ab animi asperiores atque blanditiis impedit qui quia voluptate. Aliquid eius illum in ipsam laborum obcaecati tempora! Ad aliquid distinctio explicabo provident quod. Architecto assumenda debitis error nulla, sapiente voluptatibus.</span><span>Accusamus ad aliquam amet corporis delectus dolor dolore dolores eos ex itaque labore laudantium libero maiores modi molestiae, molestias neque pariatur quam quas quia quis quod temporibus totam veritatis voluptatibus!</span><span>Aliquam at deleniti distinctio dolore doloremque dolorum eaque eius eos facilis fugit hic illum inventore iure natus nisi officia quidem ratione recusandae, repellendus sapiente sunt, tempora temporibus unde vero vitae.</span></p>
<form action="">
    <label for="name">Full Name</label><br>
    <input type="text"name="Name" id="name" placeholder="Enter Your Full Name"><br>

    <label for="regno">Registration Number</label><br>
    <input type="text"name="Registration Number" id="regno" placeholder="X001/1234/2011"><br>

    <label for="year">Year Of Study</label><br>
    <input type="text" name="Year of Study" id="year" placeholder="2011"><br>


        <p style="align-content: center">Degree To be awarded</p><br>
        <input type="radio" id="psy" name="B.A Psychology" value="PSY">
        <label for="psy">B.A PSYCHOLOGY</label><br>
        <input type="radio" id="BEd" name="EDUCATION" value="BEd">
        <label for="BEd">Bachelor Of Education</label><br>
        <input type="radio" id="BSc" name="Comp Science" value="BSc">
        <label for="BSc">Bachelor of Science Computer Science</label><br>

    <p style="align-content: center">Marital Status</p><br>
    <input type="checkbox" name="Single" id="single"> <label for="single">Single</label><br>


    <input type="checkbox" name="Married"id="married"> <label for="married">Married</label><br>


    <input type="checkbox"name="Divorced"id="divorced"> <label for="divorced">Divorced</label><br>

    <input type="submit" value="Register"><br>


</body>
</html>