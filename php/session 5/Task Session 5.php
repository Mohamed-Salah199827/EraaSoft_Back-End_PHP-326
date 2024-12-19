<?php
$users = [
    [
        "Id" => 1,
        "First" => "John",
        "Last" => "Doe",
        "Age" => 30,
        "Salary" => 50000,
        "Title" => "Software Engineer"
    ],
    [
        "Id" => 2,
        "First" => "Jane",
        "Last" => "Smith",
        "Age" => 28,
        "Salary" => 60000,
        "Title" => "Project Manager"
    ],
    [
        "Id" => 3,
        "First" => "Emily",
        "Last" => "Johnson",
        "Age" => 35,
        "Salary" => 55000,
        "Title" => "UX Designer"
    ],
    [
        "Id" => 4,
        "First" => "Michael",
        "Last" => "Brown",
        "Age" => 40,
        "Salary" => 75000,
        "Title" => "Technical Lead"
    ],
    [
        "Id" => 5,
        "First" => "Sarah",
        "Last" => "Wilson",
        "Age" => 32,
        "Salary" => 62000,
        "Title" => "QA Analyst"
    ],
    [
        "Id" => 6,
        "First" => "David",
        "Last" => "Clark",
        "Age" => 29,
        "Salary" => 58000,
        "Title" => "DevOps Engineer"
    ],
    [
        "Id" => 7,
        "First" => "Laura",
        "Last" => "Martinez",
        "Age" => 33,
        "Salary" => 61000,
        "Title" => "Data Analyst"
    ],
    [
        "Id" => 8,
        "First" => "Chris",
        "Last" => "Taylor",
        "Age" => 27,
        "Salary" => 52000,
        "Title" => "Frontend Developer"
    ],
    [
        "Id" => 9,
        "First" => "Anna",
        "Last" => "Davis",
        "Age" => 36,
        "Salary" => 70000,
        "Title" => "Backend Developer"
    ],
    [
        "Id" => 10,
        "First" => "Robert",
        "Last" => "Anderson",
        "Age" => 38,
        "Salary" => 80000,
        "Title" => "Solutions Architect"
    ]
];


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">age</th>
                <th scope="col">salary</th>
                <th scope="col">title</th>
            </tr>
        </thead>
        <tbody>
          
          <?php foreach ($users as $key => $user):?>
            <tr>
                <th scope="row"><?php echo $user["Id"] ?></th>
                <td><?php echo $user['First'] ?></td>
                <td><?php echo $user['Last'] ?></td>
                <td><?php echo $user['Age'] ?></td>
                <td><?php echo $user['Salary'] ?></td>
                <td><?php echo $user['Title'] ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>