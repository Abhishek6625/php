<?php
$emp =[
    [1,'ram','manegar',5000],
    [2,'shyam','selesman',4000],
    [3,'Mohan','opertor',9000],
    [4,'Rohan','Driver',2000]
];

// echo $emp[0][2] .'<br>';
// echo $emp[1][3];



// for($row = 0 ;$row < 4; $row++ ){
//     for($col = 0; $col < 4; $col++){
//         echo $emp[$row][$col]. "  ";
//     }

//     echo "<br>";
// }


echo "<table border= '2px' cellpadding ='5px' cellspacing='0px'>";
echo "<tr>
       <th>Emp Id.</th>
       <th>Name</th>
       <th>Designation</th>
       <th>Salary</th>
      </tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2  </td>";
    }
    echo "<tr>";
}
echo "</table>";




echo "<Pre>";
print_r($emp);
echo "</Pre>";

?>